@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            </div>
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>รหัสนักศึกษา</th>
                                <th>ชื่อ</th>
                                <th>นามสุกล</th>
                                <th>วันเกิด</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Auth::id() }}</td>
                                <td>{{ Auth::user()->stud_id }}</td>
                                <td>{{ Auth::user()->f_name }}</td>
                                <td>{{ Auth::user()->l_name }}</td>
                                <td>{{ Auth::user()->birth_day }}</td>
                                <td>{{ Auth::user()->statuses->status_name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection
