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
                    @if (Auth::user()->usertype == 'Lecturer')
                        <th scope="col">Student Name</th>
                    @else
                        <th scope="col">Lecturer Name</th>
                    @endif
                    <th scope="col">Remark</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            @if(count($appointments) > 0)
                @foreach($appointments as $appointment) 
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

                            @if (Auth::user()->usertype == 'Lecturer')
                                <td>{{$appointment->student_name}}</td>
                            @else
                            <td>{{$appointment->lecturer_name}}</td>
                            @endif

                            <td>{{$appointment->remarks}}</td>
                            <td>{{$appointment->status}}</td>
                        </tr>
                    </tbody>
                @endforeach
            @else
                <p>No appointment found</p>
            @endif
        </table>
        {{$appointments->links()}}
    </div>
    
@endsection