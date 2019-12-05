<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userType = auth()->user()->usertype;
        $userName  = auth()->user()->name;
        $today = date('d-m-Y');

        if ($userType == "Student") {
            $appointments = DB::table('appointments')
                ->where('student_name', $userName)
                ->where('status', 'Approved')
                ->where('date', '<', $today)
                ->select('id','date','time', 'lecturer_name', 'remarks', 'status')
                ->orderBy('date', 'desc')
                ->paginate(10);
            return view('pages.history')->with('appointments', $appointments);
        }
        else if ($userType == "Lecturer") {
            $appointments = DB::table('appointments')
                ->where('lecturer_name', $userName)
                ->where('status', 'Approved')
                ->where('date', '<', $today)
                ->select('date','time', 'student_name', 'remarks', 'status')
                ->orderBy('date', 'desc')
                ->paginate(10);
            return view('pages.history')->with('appointments', $appointments);
        }
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
}