@extends('layouts.student')

@section('content')
    <div class="container">
        <h4>ข้อเสนอแนะ</h4>
        <form action="{{ url('/suggestion') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="form-group row">
                <label for="suggestion" class="col-md-2 col-form-lable text-md-right mt-2">คำแนะนำ</label>
                <div class="col-md-10 mt-2">
                    <textarea name="suggestion" id="suggestion" cols="25" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <button class="ml-5 btn btn-success" type="submit">ส่ง</button>
            </div>
        </form>
    </div>
@endsection