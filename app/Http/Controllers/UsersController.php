<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Users $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, Users $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show',$user->id)->with('success','个人资料更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user)
    {
        //
    }
}
