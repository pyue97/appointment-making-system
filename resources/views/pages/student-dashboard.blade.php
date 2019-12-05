@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>DASHBOARD</h1>
        </div>
        <hr/>
        
        <h4>Pending appointments</h4>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Lecturer Name</th>
                    <th scope="col">Remark</th>
                    <th scope="col">Status</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            @if(count($appointments) > 0)
                @foreach($appointments as $appointment) 
                    @if($appointment->status == "Pending")
                        <tbody style="background-color: white">
                            <tr style="text-align: center">
                                <td>{{$appointment->date}}</td>

                                @if ($appointment->time == '8-9')
                                    <td>8:00AM - 9:00AM</td>
                                @elseif ($appointment->time == '9-10')
                                    <td>9:00AM - 10:00AM</td>
                                @elseif ($appointment->time == '10-11')
                                    <td>10:00AM - 11:00AM</td>
                                @elseif ($appointment->time == '11-12')
                                    <td>11:00AM - 12:00PM</td>
                                @elseif ($appointment->time == '12-1')
                                    <td>12:00AM - 1:00PM</td>
                                @elseif ($appointment->time == '1-2')
                                    <td>1:00PM - 2:00PM</td>
                                @elseif ($appointment->time == '2-3')
                                    <td>2:00PM - 3:00PM</td>
                                @else
                                    <td>3:00PM - 4:00PM</td>
                                @endif

                                <td>{{$appointment->lecturer_name}}</td>
                                <td>{{$appointment->remarks}}</td>
                                <td>{{$appointment->status}}</td>
                                <td><a href="{{route('students.cancel', $appointment->id)}}" class="btn btn-dark btn-sm">Cancel</a></td>
                            </tr>
                        </tbody>
                    @endif
                @endforeach
            @else
                <p>No appointment found</p>
            @endif
        </table>
        {{$appointments->links()}}
        <br /><br />
        
        <h4>Upcoming appointments</h4>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Lecturer Name</th>
                    <th scope="col">Remark</th>
                    <th scope="col">Status</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            @if(count($appointments) > 0)
                @foreach($appointments as $appointment) 
                    @if($appointment->status == "Approved")
                        <tbody style="background-color: white">
                            <tr style="text-align: center">
                                <td>{{$appointment->date}}</td>

                                @if ($appointment->time == '8-9')
                                    <td>8:00AM - 9:00AM</td>
                                @elseif ($appointment->time == '9-10')
                                    <td>9:00AM - 10:00AM</td>
                                @elseif ($appointment->time == '10-11')
                                    <td>10:00AM - 11:00AM</td>
                                @elseif ($appointment->time == '11-12')
                                    <td>11:00AM - 12:00PM</td>
                                @elseif ($appointment->time == '12-1')
                                    <td>12:00AM - 1:00PM</td>
                                @elseif ($appointment->time == '1-2')
                                    <td>1:00PM - 2:00PM</td>
                                @elseif ($appointment->time == '2-3')
                                    <td>2:00PM - 3:00PM</td>
                                @else
                                    <td>3:00PM - 4:00PM</td>
                                @endif

                                <td>{{$appointment->lecturer_name}}</td>
                                <td>{{$appointment->remarks}}</td>
                                <td>{{$appointment->status}}</td>
                                <td><a href="{{route('students.cancel', $appointment->id)}}" class="btn btn-dark btn-sm">Cancel</a></td>
                            </tr>
                        </tbody>
                    @endif
                @endforeach
            @else
                <p>No appointment found</p>
            @endif
        </table>
        {{$appointments->links()}}
    </div>
    
@endsection