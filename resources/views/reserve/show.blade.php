@extends('layouts.student')

@section('content')
    <div class="container">
      
        <h4 class="mt-2">ข้อมูลรายวิชา</h4>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>ห้องเรียน</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>เทอม</th>
                    <th>สถานะการจอง</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($reserves as $item)
                    <tr>
                        <td>{{ $item->subject_id }}</td>
                        <td>{{ $item->subject_name }}</td>
                        <td>{{ $item->class_room }}</td>
                        <td>{{ $item->teacher }}</td>
                        <td>{{ $item->term}}</td>
                        <td>{{ $item->status_re}}</td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
@endsection