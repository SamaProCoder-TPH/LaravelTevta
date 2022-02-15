<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


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


    public function createPermissions()
    {
        $permission = Permission::create(['name' => 'File Module']);
        $permission = Permission::create(['name' => 'Data Module']);
        $permission = Permission::create(['name' => 'Reports Module']);
        $permission = Permission::create(['name' => 'Backup Module']);



        // $user->givePermissionTo('edit articles');

        // // You can also give multiple permission at once
        // $user->givePermissionTo('edit articles', 'delete articles');

        // // You may also pass an array
        // $user->givePermissionTo(['edit articles', 'delete articles']);

    }
}
