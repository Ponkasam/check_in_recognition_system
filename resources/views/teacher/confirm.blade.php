@extends('layouts.teacher')

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

                    
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $item)
                    <tr>
                    <td>{{ $item->subject_id }}</td>
                    <td><a href="{{ url('/teacher/'. $item->subject_id) }}">{{ $item->subject_name }}</a></td>
                    <td>{{ $item->class_room }}</td>
                    <td>{{ $item->teacher }}</td>

                    </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
@endsection