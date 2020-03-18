@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class="display-8 mt-5">ข้อมูลรายชื่อ</h4>
        <form action="#">
            <div class="form-group row ml-5">
                <label for="stud_id" class="col-sm-2 col-form-label mt-2">รหัสมาชิก</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="stud_id" value="{{ $user->stud_id }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="f_name" class="col-sm-2 col-form-label mt-2">ชื่อ</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="stud_id" value="{{ $user->f_name }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="l_name" class="col-sm-2 col-form-label mt-2">นามสกุล</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="stud_id" value="{{ $user->l_name }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="birth_day" class="col-sm-2 col-form-label mt-2">วัน/เดือน/ปี</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="stud_id" value="{{ $user->birth_day }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="username" class="col-sm-2 col-form-label mt-2">ชื่อผู้ใช้</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="stud_id" value="{{ $user->username }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="status_name" class="col-sm-2 col-form-label mt-2">สถานะ</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="stud_id" value="{{ $user->statuses->status_name }}">
                </div>
            </div>
            <a href="{{ url('/admin') }}"><button class="btn btn-success mt-2" type="button">ย้อนกลับ</button></a>
        </form>
    </div>
@endsection