<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

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
            'role_id' => 2,
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
    public function update(UpdateUserRequest $request, User $user)
    {
        $HASH = ['MOTDEPASS'];

        $data = $request->validated();
        $user->update([
            'password' => bcrypt($data['password'],[$HASH]),
            'email' => $data['email'],
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'role_id' => $user->role_id,
            ]);

        return "Sucess updating user: " . $user->login;    
    }
}
