@extends('layouts.admin')

@section('content')
<a href="{{ url('/admin/create') }}"><button class="btn btn-success" type="button">เพิ่มข้อมูล</button></a>
<a href="{{ url('/admin/report') }}"><button class="btn btn-info" type="button">รายงานผู้ใช้ระบบ</button></a>
    <table class="table table-bordered mt-2">
        <thead class="text-center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">รหัสมาชิก</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">วัน/เดือน/ปี</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->stud_id }}</td>
                    <td>{{ $user->f_name }}</td>
                    <td>{{ $user->l_name }}</td>
                    <td>{{ $user->birth_day }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ url('/admin/' . $user->id) }}"><button class="btn btn-info" type="button">แสดง</button></a>
                            <a href="{{ url('/admin/' . $user->id . '/edit') }}"><button class="btn btn-warning" type="button">แก้ไข</button></a>
                            <form action="{{ url('/admin/' . $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit">ลบข้อมูล</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection