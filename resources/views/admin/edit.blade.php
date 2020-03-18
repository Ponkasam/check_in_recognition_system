@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class="display-7 mt-5" >แก้ไขข้อมูล</h4>
        <form action="{{ url('/admin/' . $user->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <div class="form-group row ml-5">
                <label for="stud_id" class="col-sm-2 col-form-label mt-2">รหัสนักศึกษา</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stud_id" name="stud_id" value="{{ isset($user->stud_id) ? $user->stud_id: '' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="f_name" class="col-sm-2 col-form-label mt-2">ชื่อ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="f_name" name="f_name" value="{{ isset($user->f_name) ? $user->f_name: '' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="l_name" class="col-sm-2 col-form-label mt-2">นามสกุล</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="l_name" name="l_name" value="{{ isset($user->l_name) ? $user->l_name: '' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="birth_day" class="col-sm-2 col-form-label mt-2">วัน/เดือน/ปี</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="birth_day" name="birth_day" value="{{ isset($user->birth_day) ? $user->birth_day: '' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="username" class="col-sm-2 col-form-label mt-2">ชื่อผู้ใช้</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" value="{{ isset($user->username) ? $user->username: '' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="status_id" class="col-sm-2 col-form-label mt-2">สถานะ</label>
                {{-- <div class="col-sm-10">
                    <input type="text" class="form-control" id="status_id" name="status_id" value="{{ isset($user->statuses->status_name) ? $user->statuses->status_name: '' }}">
                </div> --}}
                <div class="col-sm-10">
                <select name="status_id" id="status_id" class="custom-select">
                    <option selected>เลือกสถานะ</option>
                    @foreach($status as $item)
                        <option value="{{ $item->status_id }}">{{ $item->status_name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <button class="btn btn-success mt-2" type="submit">อัพเดทข้อมูล</button>
        </form>
    </div>
@endsection