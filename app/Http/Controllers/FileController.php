<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
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
    public function newSession()
    {
        return view('File_module.sessions.newSession');
    }

    public function closeSession()
    {
        return view('File_module.sessions.closeSession');
    }
    
    public function homepage()
    {
        return view('Dashboard');
    }
}
