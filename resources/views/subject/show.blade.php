@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="mt-5">รายละเอียดวิชาเรียน</h4>
    <form action="#">
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">รหัสวิชา</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->subject_id }}
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">ชื่อวิชา</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->subject_name }}
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">ห้องเรียน</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->class_room }}
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">เวลาเรียน</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->subject_time }}
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">วันที่เรียน</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->days->day_name }}
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">เทอม</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->term }}
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">เซ็ค</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->sect }}
            </div>
        </div>
        <div class="form-group row ml-5">
            <label for="subject_id" class="col-sm-2 col-form-label mt-2">อาจารย์ผู้สอน</label>
            <div class="col-sm-10 mt-3">
                {{ $subject->teacher }}
            </div>
        </div>
        <a href="{{ url('/subject') }}"><button class="btn btn-success" type="button">ย้อนกลับ</button></a>
    </form>
</div>
@endsection