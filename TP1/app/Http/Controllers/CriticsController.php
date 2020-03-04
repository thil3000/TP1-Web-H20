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
        $critic = Critic::create([
        'user_id' => $request->user_id,
        'film_id' => $request->film_id,
        'score' => $request->score,
        'comment' => $request->comment
        ]);
        
        return "Critic added";
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
