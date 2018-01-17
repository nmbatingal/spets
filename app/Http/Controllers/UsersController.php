<?php

namespace App\Http\Controllers;

use App\User;
use App\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users   = User::orderBy('firstname', 'ASC')->get();
        $offices = Office::orderBy('div_name', 'ASC')->get();
        return view('accounts.users', compact('users', 'offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id   = $request['u_id'];
        $user = User::findOrFail($id);

        $user->firstname       = $request['u_fname'];
        $user->middlename      = $request['u_mname'];
        $user->lastname        = $request['u_lname'];
        $user->email           = $request['u_email'];
        $user->mobile_number   = $request['u_contact'];
        $user->division_unit   = $request['u_unit'];
        //$user->__img   = $request['u_img'];
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus() 
    {
        $id   = Input::get('id');
        $val  = Input::get('value') ? 1 : 0;

        $user = User::findOrFail($id);

        $user->status = $val;
        $user->save();

        return response()->json("success");
    }

    public function changeAdmin() 
    {
        $id   = Input::get('id');
        $val  = Input::get('value') ? 1 : 0;

        $user = User::findOrFail($id);

        $user->__is = $val;
        $user->save();

        return response()->json("success");
    }

    public function resetPassword() 
    {
        $id   = Input::get('id');
        $user = User::findOrFail($id);

        $user->password = bcrypt('dostcaraga');
        $user->save();

        return response()->json("success");
    }
}