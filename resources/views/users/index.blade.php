@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>DASHBOARD</h1>
        </div>
        <hr/>

        <a href="/users/create" class="btn btn-dark col-2" style="float: right">ADD NEW USER</a>
        
        <br /><br /><br />

        <table id="tb_UserList" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Name</th>
                    <th scope="col">User Email</th>
                    <th scope="col">User Type</th>
                </tr>
            </thead>
            @if(count($users) > 0)
                @foreach($users as $user) 
                    <tbody style="background-color: white">
                        <tr style="text-align: center">
                            <td><a href="/users/{{$user->id}}">{{$user->id}}</a></td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->name}}</td>
                            <td style="text-align: left">{{$user->email}}</td>
                            <td>{{$user->usertype}}</td>
                        </tr>
                    </tbody>
                @endforeach
            @else
                <p>No user found</p>
            @endif
        </table>
        {{$users->links()}}
    </div>

@endsection