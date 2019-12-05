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
        
        <form action="" method="post">
                    <div class="form-group">
                        <label for="ddlTime">Available Timeslot</label>
                        <select id="ddlTime" class="form-control">
                            <option selected>Select...</option>
                            @foreach($times as $time)
                            <option value="{{$time -> time}}">{{$time -> time}}</option>   
                            @endforeach
                        </select>
                    </div>
                
                    <br/>
                    <button type="button" class="btn btn-dark col-12" id="search">Submit</button>
                    <input type="hidden" name="submitted" value="true" />
                </form>
        
        
    </div>
@endsection
