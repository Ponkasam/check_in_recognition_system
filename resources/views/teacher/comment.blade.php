@extends('layouts.teacher')

@section('content')
    <div class="container">
        <h4>ข้อเสนอแนะ</h4>
        <form action="{{ url('/comment') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="form-group row">
                <label for="commect" class="col-md-2 col-form-label text-md-right mt-2">ข้อแนะนำ</label>
                <div class="col-md-10 mt-2">
                    <textarea name="suggestion" id="comment" cols="25" rows="5"></textarea>
                </div>
            </div>
            <button class=" ml-5 btn btn-success" type="submit" >ส่ง</button>
        </form>
    </div>
@endsection