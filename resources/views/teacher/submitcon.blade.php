@extends('layouts.teacher')

@section('content')
    <div class="container">
      
    <h4 class="mt-2">ข้อมูลรายวิชา </h4>
   
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>รหัสนักศึกษา</th>
                    <th>รหัสวิชา</th>
                    <th>ห้องเรียน</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>สถานะ</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($reserved as $row)
                    @foreach($subject as $item)
                    <tr>
                    <td>{{ $item->stud_id }}</td>
                    <td>{{ $item->subject_id }}</td>
                    <td>{{ $row->class_room }}</td>
                    <td>{{ $row->teacher }}</td>
                    
                    <td>{{ $item->status_re }}</td>
                    <td>
                        @if( $item->status_re == 'ยังไม่อนุมัติ')
                        <form action="{{ url('/teacher/' . $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" class="form-control" id="status_re" name="status_re" value="อนุมัติแล้ว">
                            <button class="btn btn-success mt-2" type="submit">อนุมัติการจอง</button>
                        </form>
                        
                        @endif
                    </td>
                    </tr>
                @endforeach
               
            </tbody>
        </table><a href="{{ url('teacher/'.$item->subject_id.'/report') }}"><button class="btn btn-info mt-2" type="button">Report</button></a>
        @endforeach
    </div>
@endsection