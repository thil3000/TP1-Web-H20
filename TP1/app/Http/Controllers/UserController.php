<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UsersResource;
use App\Http\Requests\CreateUserRequest;

use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::paginate(20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $HASH = ['MOTDEPASS'];

        $user = User::create([
            'id' => $request->id,
            'login' => $request->login,
            'password' => bcrypt($request->password,[$HASH]),
            'email' => $request->email,
            'last_name' => $request->last_name,
            'frist_name' => $request->frist_name,
            'role_id' => $request->role_id,
            ]);
            
            return "User added";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $userid)
    {
        return new UsersResource($userid);
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
    public function destroy($id)
    {
        //
    }
}
