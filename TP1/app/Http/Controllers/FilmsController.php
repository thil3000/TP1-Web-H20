<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use DateTime;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'rr';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filmAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $film = new Film();
         $film->timestamps = false;
         $film->id = $request->id;
         $film->title = $request->title;
         $film->release_year = $request->release_year;
         $film->length = $request->length;
         $film->description = $request->description;
         $film->rating = $request->rating;                                //A REVOIR POUR QUE TRANSFERT SE FASSE DANS BD
         $film->langage_id = $request->langage_id;
         $film->special_features = $request->special_features;
         $film->image = $request->image;
         $film->save();

        return view('filmAddedConfirmation', compact('film'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }
}
