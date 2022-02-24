<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
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
    public function enterYear()
    {
        return view('Data_module.enterYear');
    }

    public function enterStudentDetails()
    {
        return view('Data_module.enterStudentDetail');

    }
    
    public function homepage()
    {
        return view('Dashboard');
    }
}
