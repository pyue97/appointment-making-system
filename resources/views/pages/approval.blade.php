@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
            <div class="row justify-content-center align-items-center">
                <h1>PENDING REQUESTS</h1>
            </div>
            <hr/>
            
            <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr style="text-align: center">
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Student</th>
                            <th scope="col">Remark</th>
                            <th scope="col">Approval</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white">
                        <tr style="text-align: center">
                            <td>20/09/2019</td>
                            <td>11:30 A.M.</td>
                            <td>Ho Pei Yue</td>
                            <td style="text-align: left">Meeting at LR502</td>
                            <td><a href="">YES</a> / <a href="">NO</a></td>
                        </tr>
                        <tr style="text-align: center">
                            <td>27/09/2019</td>
                            <td>1:00 P.M.</td>
                            <td>Connie Ooi Jing Er</td>
                            <td style="text-align: left">FYP</td>
                            <td><a href="">YES</a> / <a href="">NO</a></td>
                        </tr>
                        <tr style="text-align: center">
                            <td>02/10/2019</td>
                            <td>12:30 A.M.</td>
                            <td>Tan Lip Wai</td>
                            <td style="text-align: left">Meeting at LR502</td>
                            <td><a href="">YES</a> / <a href="">NO</a></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    
@endsection