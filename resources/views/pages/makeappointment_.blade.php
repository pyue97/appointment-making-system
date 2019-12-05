@extends('layouts.app')

@section('content')
    <style>
        .width-25 {
            width: 25px;
        }
    </style>
    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>Lecture : {{$name}}</h1>
            <br />
        </div>
        <div class="row justify-content-center align-items-center">
        <div>
            <h1>Date : {{$date}}</h1>
        </div>
        </div>
        <hr/>

        <a href="/makeappointment" class="btn btn-dark btn-sm col-1">GO BACK</a>
        <br />
        <br />

        <form action="/makeappointment_/{{$date}}/{{$name}}" method="post">
                    <div class="form-group">
                        <label for="ddlTime">Available Timeslot</label>
                        <select id="ddlTime" class="form-control" name="time">
                            <option selected>Select...</option>
                            @foreach($times as $time)
                            <option value="{{$time -> time}}">@if ($time->time == '8-9')
                                    8:00AM - 9:00AM
                                @elseif ($time->time == '9-10')
                                    9:00AM - 10:00AM
                                @elseif ($time->time == '10-11')
                                    10:00AM - 11:00AM
                                @elseif ($time->time == '11-12')
                                    11:00AM - 12:00PM
                                @elseif ($time->time == '12-1')
                                    12:00AM - 1:00PM
                                @elseif ($time->time == '1-2')
                                    1:00PM - 2:00PM
                                @elseif ($time->time == '2-3')
                                    2:00PM - 3:00PM
                                @else
                                    3:00PM - 4:00PM
                                @endif
</option>   
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Remark</label>
                        <input type="text" class="form-control" id="remark" name="remark">
                        <br>
                    </div>
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br/>
                    <button type="submit" class="btn btn-dark col-12" id="search">Submit</button>
                    <input type="hidden" name="submitted" value="true" />
                </form>   
    </div>
@endsection