@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4>แก้ไขรายวิชาเรียน</h4>
        <form action="{{ url('/subject/'. $subject->id) }}"method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group row ml-5">
                <label for="subject_id" class="col-sm-2 col-form-label mt-2">รหัสวิชา</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject_id" name="subject_id" value="{{ isset($subject->subject_id) ? $subject->subject_id:'' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="subject_name" class="col-sm-2 col-form-label mt-2">ชื่อวิชา</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject_name" name="subject_name" value="{{ isset($subject->subject_name) ? $subject->subject_name: '' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="class_room" class="col-sm-2 col-form-label mt-2">ห้องเรียน</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="class_room" name="class_room" value="{{ isset($subject->class_room) ? $subject->class_room: '' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="subject_time" class="col-sm-2 col-form-label mt-2">เวลาเรียน</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject_time" name="subject_time" value="{{ isset($subject->subject_time) ? $subject->subject_time: '' }}">
                </div>
            </div>
            {{-- <div class="form-group row ml-5">
                <label for="day_id" class="col-sm-2 col-form-label mt-2">วันที่เรียน</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="day_id" name="day_id" value="{{ isset($subject->day_id) ? $subject->day_id: '' }}">
                </div>
            </div> --}}
            <div class="form-group row ml-5">
                <label for="day_id" class="col-sm-2 col-form-lable mt-2">วันที่เรียน</label>
                <div class="col-sm-10">
                    <select name="day_id" id="day_id" class="custom-select">
                        <option selected>{{ isset($subject->days->day_name) ? $subject->days->day_name:'' }}</option>
                        @foreach($day as $item)
                            <option value="{{ $item->day_id }}">{{ $item->day_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="term" class="col-sm-2 col-form-label mt-2">เทอม</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="term" name="term" value="{{ isset($subject->term) ? $subject->term:'' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="sect" class="col-sm-2 col-form-label mt-2">เซ็ค</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sect" name="sect" value="{{ isset($subject->sect) ? $subject->sect:'' }}">
                </div>
            </div>
            <div class="form-group row ml-5">
                <label for="teacher" class="col-sm-2 col-form-label mt-2">อาจารย์</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="teacher" name="teacher" value="{{ isset($subject->teacher) ? $subject->teacher:'' }}">
                </div>
            </div>
            
            <button class="btn btn-success mt-2" type="submit">อัพเดทข้อมูล</button>
        </form>
    </div>
@endsection