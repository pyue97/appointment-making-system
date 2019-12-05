<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{


    public function makeappointment_($date, $name, Request $request){



        $users = DB::table('appointments') -> where('status','Available') ->select ('lecturer_name', 'status')->get();

        $time = DB::table('appointments') -> where('status','Available') ->select ('lecturer_name', 'status', 'time')->get();


        return view('pages.makeappointment_', compact('date', 'name', 'users','time'));
    }
}

