@extends('layouts.student')
@section('content')
<div class="container">
        <a href="{{ url('/checkinStudent/report') }}"><button class="btn btn-success" type="button">รายงาน</button></a>
        {{-- {{ Auth::user()->stud_id }} --}}
          <h4 class="mt-2">ข้อมูลการเข้าเรียน</h4>
          <table class="table table-bordered mt-2">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>รหัสนักศึกษา</th>
                      <th>รหัสวิชา</th>
                      <th>สถานะการเข้าเรียน</th>
                      <th>เวลาเข้าเรียน</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($checkins as $item)
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->stud_id }}</td>
                          <td>{{ $item->subject_id }}</td>
                          <td>{{ $item->status_check }}</td>
                          <td>{{ $item->created_at }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
@endsection