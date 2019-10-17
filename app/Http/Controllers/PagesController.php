<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function registration() {
        return view('pages.registration');
    }

    public function history() {
        return view('pages.history');
    }

    public function userlist() {
        return view('pages.userlist');
    }

    public function makeappointment() {
        return view('pages.makeappointment');
    }

    public function approval() {
        return view('pages.approval');
    }
}
