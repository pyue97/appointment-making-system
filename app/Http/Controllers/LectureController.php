<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = $request->input('time');
        $lectureName  = auth()->user()->name;

//        foreach()
        dd($lectureName);
//        $user = new Appointment;
//        $user->name = $input['name'];
//        $user->email = $input['email'];
//        $user->password = Hash::make($input['password']);
//        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function manage(){
        return view('lectures.date');
    }

    public function appointment($date, Request $request){

        $lecturerName  = auth()->user()->name;

        if ($request->isMethod('post')) {
            $times = $request->input('time');
            foreach ($times as $time) {
                if ($appointment = Appointment::where('lecturer_name', $lecturerName)->where('date', $date)->where('time', $time)->first()){
                    continue;
                }else{
                    $appointment = new Appointment;
                    $appointment->date = $date;
                    $appointment->time = $time;
                    $appointment->lecturer_name = $lecturerName;
                    $appointment->status = 'Available';
                    $appointment->save();
                }
            }
            return view('lectures.date');
        }
        $appointment = Appointment::where('lecturer_name', $lecturerName)
            ->where('date', $date)
            ->pluck('time')
            ->all();

//        dd($appointment);

        return view('lectures.appointment', compact('appointment', 'date'));
    }
}
