@extends('layouts.teacher')

@section('content')
<form method="GET" action="{{ url('/checkinTeacher') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
        <span class="input-group-append">
            <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </span>
    </div>
</form>
<div class="container">
        {{-- {{ Auth::user()->stud_id }} --}}
        <a href="{{ url('/checkinTeacher/report') }}"><button class="btn btn-info" type="button">รายงาน</button></a>
          <h4 class="mt-2">แก้ไขและประวัติการเข้าเรียน</h4>
          <table class="table table-bordered mt-2">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>สถานะการเข้าเรียน</th>
                    <th>สัปดาห์</th>
                    <th>เวลาเข้าเรียน</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                    @foreach($checkins as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->stud_id }}</td>
                        <td>{{ $item->f_name }}</td>
                        <td>{{ $item->l_name }}</td>
                        <td>{{ $item->subject_id }}</td>
                        <td>{{ $item->subject_name }}</td>
                        <td>{{ $item->status_check }}</td>
                        <td>{{ $item->week }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href=""><button class="btn btn-warning" type="button" >แก้ไข</button></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
      </div>
@endsection