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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    public function index(request $request){
        $user = Auth::user()->name;
//        echo $user;
        if ($user == 'admin1'||$user == 'admin2'||$user == 'admin3'){
            return view('/indexHR');
        }else if ($user == 'director'){
            return view('home');
        }else{
            return view('home');
        }

    }

    public function getEmployees(){
        //$users1 = DB::table ('employee') select('name')->get();

        return view('HR/Employees');
    }

    public function getPendingLeaves(){
        return view ('HR/PendingLeaves');
    }

    public function getRandF(){
        return view ('HR/RandF');
    }

    public funtion getLogInPage(){
        return view ('login');
    }

    public function getIndexHR(){
        return view ('indexHR');
    }

    public function getEmpProf(){
        return view ('HR/EmpProf');
    }

    
}
