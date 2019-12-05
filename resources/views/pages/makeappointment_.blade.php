@extends('layouts.app')

@section('content')
    <style>
        .width-25 {
            width: 25px;
        }
    </style>

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
        <h1>{{$name}}, {{$date}}</h1>
        </div>
        <hr/>

        <a href="/makeappointment" class="btn btn-dark btn-sm col-1">GO BACK</a>
        <br />
        <br />
        
        <div class="form-group">
            <label for="ddlLecturer">Available Timeslot</label>
            <select id="ddlLecturer" class="form-control">
            <option selected>Select...</option>
                
            </select>
        </div>
        
        
    </div>
@endsection
