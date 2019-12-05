<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('d-m-Y');
        $student_name = auth()->user()->name;

        $appointments = DB::table('appointments')
            ->where('date', '>=', $today)
            ->where('student_name', $student_name)
            ->select('id', 'date','time', 'lecturer_name', 'remarks', 'status')
            ->orderBy('date', 'asc')
            ->paginate(10);
        return view('pages.student-dashboard')->with('appointments', $appointments);
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
        //
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

    public function cancel($id)
    {
        $appointment = Appointment::find($id);
        $date = $appointment->date;
        $time = $appointment->time;
        $lecturer_name = $appointment->lecturer_name;
        $student_name = $appointment->student_name;
        $lecturer_email = User::where('name', $appointment->lecturer_name)->first()->email;

        $appointment->student_name = "";
        $appointment->remarks = "";
        $appointment->status = "Available";
        $appointment->save();

        $data = [
            'title' => 'Cancel Appointment: ' . $student_name,
            'content' => 'Your appointment on ' . $date . ' at ' . $time . ' has been cancelled by the student, ' .
             $student_name . '.'
        ];

        Mail::send('emails.notification', $data, function($message) use($lecturer_email, $lecturer_name){
            $message->from('admin@admin.com', 'Admin');

            $message->to($lecturer_email, $lecturer_name)->subject('Cancelled Appointment');
        });

        return redirect('/student')->with('success', 'Appointment Cancelled');
    }

    public function makeappointment(){

        $lecturers = DB::table('users')->where('usertype','Lecturer')->select ('usertype','name')->get();
        // $date = DB::table('appointments')->where('lecturer_name', $name)
        //                                 ->where('status','Available') 
        //                                 ->select('date')->get();


        return view('pages.makeappointment', compact ('lecturers', 'date'));
    }

    public function makeappointment_($date, $name, Request $request){

        if ($request->isMethod('post')) {
            $appointment = Appointment::where('lecturer_name', $name)
                                        ->where('date', $date)
                                        ->where('time', $request->time)
                                        ->first();

            $appointment->student_name = auth()->user()->name;
            if($request->remark){
                $appointment->remarks = $request->remark;   
            }                        
            $appointment->status = 'Pending';
            $appointment->save();

            return redirect('/')->with('success', 'Appointment has been made and awaiting approval.');;
        };

        $times = DB::table('appointments') 
                        -> where('status','Available') 
                        -> where('lecturer_name', $name)
                        -> where('date' ,$date)
                        ->get();

        return view('pages.makeappointment_', compact('date', 'name', 'times'));
    }
}

