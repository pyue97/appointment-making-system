<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{


    public function makeappointment_($date, $name, Request $request){

        $times = DB::table('appointments') -> where('status','Available') -> where('lecturer_name', $name)->select ('time')->get();

        return view('pages.makeappointment_', compact('date', 'name', 'times'));
    }
}

