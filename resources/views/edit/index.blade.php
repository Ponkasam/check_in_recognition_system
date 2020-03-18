@extends('layouts.teacher')

@section('content')
    <div class="container">
        <a href="{{ url('/edit/create') }}"><button class="btn btn-success" type="button">เพิ่มรายวิชา</button></a>
        <h4 class="mt-2">ข้อมูลรายวิชา</h4>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>ห้องเรียน</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>เทอม</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->subject_id }}</td>
                        <td>{{ $item->subject_name }}</td>
                        <td>{{ $item->class_room }}</td>
                        <td>{{ $item->teacher }}</td>
                        <td>{{ $item->term }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ url('/edit/'. $item->id) }}"><button class="btn btn-info" type="button"> แสดง</button></a>
                                <a href="{{ url('/edit/'. $item->id .'/edit') }}"><button class="btn btn-warning" type="button">แก้ไข</button></a>
                                <form action="{{ url('/edit/'. $item->id) }}"method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">ลบ</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection