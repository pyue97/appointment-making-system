@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
        <h1>MANAGE USER ID #{{$user->id}}</h1>    
        </div>
        <hr/>
        
        <a href="/users" class="btn btn-dark btn-sm col-1">GO BACK</a>
        <br />
        <br />

        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <form action="/" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="inputUsername">USERNAME</label>
                        <input type="text" class="form-control" name="inputUsername" value="{{$user->username}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputName">NAME</label>
                        <input type="text" class="form-control" name="inputNAME" value="{{$user->name}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">EMAIL</label>
                        <input type="text" class="form-control" name="inputEmail" value="{{$user->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputUserType">USER TYPE</label>
                        <input type="text" class="form-control" name="inputUserType" value="{{$user->usertype}}" disabled>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-dark col-12">EDIT USER</button>
                </form>

                <form action="/users/{{$user->id}}" method="POST">
                    {{ method_field('DELETE') }}
                   <div class="form-group">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   </div>
                    <button type="submit" class="btn btn-danger col-12">DELETE</button>
                </form>
            
            
            </div>
        </div>
    </div>

@endsection