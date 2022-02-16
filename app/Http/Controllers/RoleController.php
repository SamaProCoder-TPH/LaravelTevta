<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

        $this->validate($request, [
            'role_name' => ['required', 'string', 'max:255'],
        ]);
      
        if($request->has('role_name'))
        {
            $name = $request->role_name;
            dd($name);
            $role1 = Role::create(['name' => $name]);
        }
        

        dd($role1);
    }
}
