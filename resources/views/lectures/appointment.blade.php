@extends('layouts.app')

@section('content')
    <style>
        .width-25 {
            width: 25px;
        }
    </style>

    <div class="container">
        <div class="jumbotron h-100">
            <div class="row justify-content-center align-items-center">
                <h1>{{$date}}</h1>
            </div>
        </div>

        <form class="form-horizontal" method="post" action="/manage/{{$date}}" style="background-color: #e9ecef;">
            <div class="form-group row" style="padding: 1.25rem ">
                <div class='col-sm-4'>

                </div>
                <div class='col-sm-4' style="font-size: 20px">
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="8-9" @if(in_array('8-9',$appointment)) checked @endif>08.00 AM - 09.00 AM
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="9-10" @if(in_array('9-10',$appointment)) checked @endif>09.00 AM - 10.00 AM
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="10-11" @if(in_array('10-11',$appointment)) checked @endif>10.00 AM - 11.00 AM
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="11-12" @if(in_array('11-12',$appointment)) checked @endif>11.00 AM - 12.00 PM
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="12-1" @if(in_array('12-1',$appointment)) checked @endif>12.00 PM - 01.00 PM
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="1-2" @if(in_array('1-2',$appointment)) checked @endif>01.00 PM - 02.00 PM
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="2-3" @if(in_array('2-3',$appointment)) checked @endif>02.00 PM - 03.00 PM
                    </div>
                    <div class="card-body">
                        <input type="checkbox" class="width-25" name="time[]" value="3-4" @if(in_array('3-4',$appointment)) checked @endif>03.00 PM - 04.00 PM
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary float-right">Save</button>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
@endsection
