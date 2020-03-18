<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->statuses->status_name == "admin"){
            return redirect("/admin");
        }else if(Auth::user()->statuses->status_name == "teacher"){
            return redirect("/teacher");
        }else if(Auth::user()->statuses->status_name == "student"){
            return redirect("/student");
        }

        // return view('home');
    }
}
