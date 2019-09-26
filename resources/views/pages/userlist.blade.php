@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>USER LIST</h1>
        </div>
        <hr/>
        
        <table id="tb_UserList" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">User Email</th>
                    <th scope="col">User Type</th>
                </tr>
            </thead>
            <tbody style="background-color: white">
                <tr style="text-align: center">
                    <td>1</td>
                    <td>p16001234</td>
                    <td style="text-align: left">p16001234@student.newinti.edu.my</td>
                    <td>Student</td>
                </tr>
                <tr style="text-align: center">
                    <td>2</td>
                    <td>vimala.doraisamy</td>
                    <td style="text-align: left">vimala.doraisamy@s.newinti.edu.my</td>
                    <td>Lecturer</td>
                </tr>
                <tr style="text-align: center">
                    <td>3</td>
                    <td>p16008888</td>
                    <td style="text-align: left">p16008888@student.newinti.edu.my</td>
                    <td>Student</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection