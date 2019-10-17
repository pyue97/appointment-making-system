@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>EDIT USER</h1>    
        </div>
        <hr/>
        
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <form action="{{ action(['UsersController@update', $user->id]) }}" method="GET">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="inputUsername">USERNAME</label>
                        <input type="text" class="form-control" name="inputUsername" value="$user->username">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">PASSWORD</label>
                        <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="inputName">NAME</label>
                        <input type="text" class="form-control" name="inputName" placeholder="$user->name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">EMAIL</label>
                        <input type="text" class="form-control" name="inputEmail" placeholder="$user->email">
                    </div>
                    <div class="form-group">
                        <label for="inputUserType">USER TYPE</label>
                        <select name="inputUserType" class="form-control">
                            <option selected>Select...</option>
                            <option>Lecturer</option>
                            <option>Student</option>
                        </select>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-dark col-12">SAVE</button>
                </form>
            </div>
        </div>
    </div>

@endsection