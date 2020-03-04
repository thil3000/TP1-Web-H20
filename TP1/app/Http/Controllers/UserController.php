<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\CreateUserRequest;

use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $HASH = ['MOTDEPASS'];

        $data = $request->validated();
        $user = User::create([
            'login' => $data['login'],
            'password' => bcrypt($data['password'],[$HASH]),
            'email' => $data['email'],
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'role_id' => 1,
            ]);
            
        return "User added";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->login = $request->input('login');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->role_id = $request->input('role_id');
        $user->save();

        return "Sucess updating user: " . $user->login;    
    }
}
