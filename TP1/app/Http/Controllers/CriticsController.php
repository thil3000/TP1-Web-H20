<?php

namespace App\Http\Controllers;

use App\Critic;
//use Illuminate\Http\Request;
use App\Http\Requests\CreateCriticRequest;

class CriticsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCriticRequest $request)
    {
        $data = $request->validated();
        $critic = Critic::create([
        'user_id' => $request->user_id,    //need authentification
        'film_id' => $data['film_id'],
        'score' => $data['score'],
        'comment' => $data['comment']
        ]);
        
        return "Critic added";
    }
}
