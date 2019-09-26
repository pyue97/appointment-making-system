@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>USER REGISTRATION</h1>    
        </div>
        <hr/>
        
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <form action="/registration" method="post">
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password">EMAIL</label>
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputUserType">USER TYPE</label>
                        <select id="inputUserType" class="form-control">
                            <option selected>Select...</option>
                            <option>Student</option>
                            <option>Lecturer</option>
                        </select>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-dark col-12">ADD USER</button>
                    <input type="hidden" name="submitted" value="true" />
                </form>
            </div>
        </div>
    </div>

@endsection