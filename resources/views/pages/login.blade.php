@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>LOG IN</h1>    
        </div>
        <hr/>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <form action="">
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-dark col-12">LOG IN</button>
                </form>
            </div>
        </div>
    </div>

@endsection