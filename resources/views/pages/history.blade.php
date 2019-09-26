@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>HISTORY</h1>
        </div>
        <hr/>
        
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Lecturer</th>
                    <th scope="col">Remark</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody style="background-color: white">
                <tr style="text-align: center">
                    <td>20/09/2019</td>
                    <td>11:30 A.M.</td>
                    <td>Vimala Doraisamy</td>
                    <td style="text-align: left">Meeting at LR502</td>
                    <td>Pending</td>
                </tr>
                <tr style="text-align: center">
                    <td>27/09/2019</td>
                    <td>1:00 P.M.</td>
                    <td>Lim Chia Yean</td>
                    <td style="text-align: left">FYP</td>
                    <td>Approved</td>
                </tr>
                <tr style="text-align: center">
                    <td>02/10/2019</td>
                    <td>12:30 A.M.</td>
                    <td>Vimala Doraisamy</td>
                    <td style="text-align: left">Meeting at LR502</td>
                    <td>Pending</td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection