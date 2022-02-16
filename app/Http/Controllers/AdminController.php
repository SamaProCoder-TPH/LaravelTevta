<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        return view('admin.userslist',compact('user'))->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editUser($userid)
    {
        
        $userid_org = \Crypt::decrypt($userid); 
        $user = User::find($userid_org);
        // dd($user);

        return view('admin.editUser',compact('user'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request)
    {
        //
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$request->id],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
        ]);
        $user = User::find($request->id);

        if($request->has('file_module'))
        {
            if($user->hasPermissionTo('File Module'))
            {
                $a = 1;
            }else{
                $user->givePermissionTo('File Module');
            }
        }else{
            $user->revokePermissionTo('File Module');
        }

        if($request->has('data_module'))
        {
            if($user->hasPermissionTo('Data Module'))
            {
                $a = 1;
            }else{
                $user->givePermissionTo('Data Module');
            }
        }else{
            $user->revokePermissionTo('Data Module');

        }
        if($request->has('report_module'))
        {
            if($user->hasPermissionTo('Reports Module'))
            {
                $a = 1;
            }else{
                $user->givePermissionTo('Reports Module');
            }
        }else{
            $user->revokePermissionTo('Reports Module');

        }
        if($request->has('backup_module'))
        {
            if($user->hasPermissionTo('Backup Module'))
            {
                $a = 1;
            }else{
                $user->givePermissionTo('Backup Module');
            }
        }else{
            $user->revokePermissionTo('Backup Module');

        }
        $request->status = isset($request->status) ? 'active' : 'inactive';

        User::where('id',$request->id)->update(
            [
                'role' => $request->role,
                'firstname' => $request->first_name,
                'lastname' => $request->last_name,
                'email' => $request->email,
                'phonenumber' => $request->phone,
                'status' => $request->status,
            ]
        );

        return redirect()->back();
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function initializePassword()
    {
        return view('admin.initializePassword');
    }

    public function initializePasswordSave(Request $request)
    {
        dd($request->all());
        return view('admin.initializePassword');
    }
}
