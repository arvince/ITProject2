<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
//        echo $user;
        if ($user == 'admin1'||$user == 'admin2'||$user == 'admin3'){
            return view('/indexHR');
        }if ($user == 'director'){
            return view('home');
        }else{
            return view('home');
        }

    }
}
