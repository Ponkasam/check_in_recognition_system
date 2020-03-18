@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class="display-7 mt-5">เพิ่มผู้ใช้งาน</h4>
        <form action="{{ url('/admin') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="form-group row">
            <label for="stud_id" class="col-md-4 col-form-label text-md-right mt-2">รหัสมาชิก</label>
            <div class="col-md-6 mt-2">
                <input id="stud_id" type="text" class="form-control"  name="stud_id">
            </div>
        </div>
        <div class="form-group row">
            <label for="f_name" class="col-md-4 col-form-label text-md-right mt-2">ชื่อ</label>
            <div class="col-md-6 mt-2">
                <input id="f_name" type="text" class="form-control"  name="f_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="l_name" class="col-md-4 col-form-label text-md-right mt-2">นาสกุล</label>
            <div class="col-md-6 mt-2">
                <input id="l_name" type="text" class="form-control"  name="l_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="birth_day" class="col-md-4 col-form-label text-md-right mt-2">วัน/เดือน/ปี เกิด</label>
            <div class="col-md-6 mt-2">
                <input id="birth_day" type="date" class="form-control"  name="birth_day">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right mt-2">ชื่อผู้ใช้</label>
            <div class="col-md-6 mt-2">
                <input id="username" type="text" class="form-control"  name="username" required autocomplete="username">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right mt-2">รหัสผ่าน</label>
            <div class="col-md-6 mt-2">
                <input id="password" type="text" class="form-control"  name="password">
            </div>
        </div>
        <div class="form-group row">
            <label for="status_id" class="col-md-4 col-form-label text-md-right mt-2">สถานะ</label>
            {{-- <div class="col-md-6 mt-2">
                <input id="status_id" type="text" class="form-control"  name="status_id">
            </div> --}}
            <div class="col-md-6 mt-2">
                <select name="status_id" id="status_id" class="custom-select">
                    <option selected>เลือกสถานะ</option>
                    @foreach($status as $item)
                        <option value="{{ $item->status_id }}">{{ $item->status_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-success" type="submit">เพิ่มผู้ใช้งาน</button>
        </form>
    </div>
@endsection