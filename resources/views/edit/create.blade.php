@extends('layouts.teacher')

@section('content')
    <div class="container">
        <h4>เพิ่มรายวิชา</h4>
        <form action="{{ url('/edit') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}

            <div class="form-group row">
            <label for="subject_id" class="col-md-4 col-form-label text-md-right mt-2">รหัสวิชา</label>
            <div class="col-md-6 mt-2">
                <input id="subject_id" type="text" class="form-control"  name="subject_id">
            </div>
        </div>
        <div class="form-group row">
            <label for="subject_name" class="col-md-4 col-form-label text-md-right mt-2">ชื่อวิชา</label>
            <div class="col-md-6 mt-2">
                <input id="subject_name" type="text" class="form-control"  name="subject_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="class_room" class="col-md-4 col-form-label text-md-right mt-2">ห้องเรียน</label>
            <div class="col-md-6 mt-2">
                <input id="class_room" type="text" class="form-control"  name="class_room">
            </div>
        </div>
        <div class="form-group row">
            <label for="subject_time" class="col-md-4 col-form-label text-md-right mt-2">เวลาเรียน</label>
            <div class="col-md-6 mt-2">
                <input id="subject_time" type="text" class="form-control"  name="subject_time">
            </div>
        </div>
        {{-- <div class="form-group row">
            <label for="day_id" class="col-md-4 col-form-label text-md-right mt-2">วันที่เรียน</label>
            <div class="col-md-6 mt-2">
                <input id="day_id" type="text" class="form-control"  name="day_id">
            </div>
        </div> --}}
        <div class="form-group row">
            <label for="day_id" class="col-md-4 col-form-label text-md-right mt-2">วันที่เรียน</label>
            <div class="col-md-6 mt2">
                <select name="day_id" id="day_id" class="custom-select">
                    <option selected>เลือกวันที่</option>
                    @foreach($day as $item)
                        <option value="{{ $item->day_id }}">{{ $item->day_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="term" class="col-md-4 col-form-label text-md-right mt-2">เทอม</label>
            <div class="col-md-6 mt-2">
                <input id="term" type="text" class="form-control"  name="term">
            </div>
        </div>
        <div class="form-group row">
            <label for="sect" class="col-md-4 col-form-label text-md-right mt-2">เซ็ค</label>
            <div class="col-md-6 mt-2">
                <input id="sect" type="text" class="form-control"  name="sect">
            </div>
        </div>
        <div class="form-group row">
            <label for="teacher" class="col-md-4 col-form-label text-md-right mt-2">อาจารย์</label>
            <div class="col-md-6 mt-2">
                <input id="teacher" type="text" class="form-control"  name="teacher">
            </div>
        </div>
        <button class="btn btn-success" type="submit">เพิ่มผู้ใช้งาน</button>
        </form>
    </div>
@endsection