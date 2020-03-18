@extends('layouts.teacher')

@section('content')
<div class="container">
    <h4 class="mt-5">ข้อมูลส่วนตัว</h4>
    <form action="#">
        <div class="form-group row ml-5">
            <label for="stud_id" class="col-sm-2 col-form-label mt-2">รหัสมาชิก</label>
            <div class="col-sm-10 mt-2">
                <input type="text" readonly class="form-control-plaintext" id="stud_id"
                    value="{{ Auth::user()->stud_id }}">
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="f_name" class="col-sm-2 col-form-label mt-2">ชื่อ</label>
            <div class="col-sm-10 mt-2">
                <input type="text" readonly class="form-control-plaintext" id="f_name"
                    value="{{ Auth::user()->f_name }}">
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="l_name" class="col-sm-2 col-form-label mt-2">นามสกุล</label>
            <div class="col-sm-10 mt-2">
                <input type="text" readonly class="form-control-plaintext" id="l_name"
                    value="{{ Auth::user()->l_name }}">
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="birth_day" class="col-sm-2 col-form-label mt-2">วัน/เดือน/ปี</label>
            <div class="col-sm-10 mt-2">
                <input type="text" readonly class="form-control-plaintext" id="birth_day"
                    value="{{ Auth::user()->birth_day }}">
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="username" class="col-sm-2 col-form-label mt-2">ชื่อผู้ใช้</label>
            <div class="col-sm-10 mt-2">
                <input type="text" readonly class="form-control-plaintext" id="username"
                    value="{{ Auth::user()->username }}">
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="status_name" class="col-sm-2 col-form-label mt-2">สถานะ</label>
            <div class="col-sm-10 mt-2">
                <input type="text" readonly class="form-control-plaintext" id="status_name"
                    value="{{ Auth::user()->statuses->status_name }}">
            </div>
        </div>
        <a href="{{ url('/teacher/' . Auth::user()->id . '/edit') }}"><button class="btn btn-success mt-2"
                type="button">แก้ไขข้อมูล</button></a>
    </form>
</div>
@endsection