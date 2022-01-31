<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function roleForm()
    {
        return view('role.role');
    }

    public function homepage()
    {
        return view('Dashboard');
    }

    public function addRole(Request $request)
    {
        dd($request);
    }
}
