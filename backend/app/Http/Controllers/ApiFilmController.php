<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use App\Models\Film;
use Spatie\Permission\Models\Role;

class ApiFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return Film::all();
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|unique:films,title',
            'director' => 'required|string',
            'producer' => 'required|string',
            'boxOffice' => 'required|numeric|between:0,9999999999.99',
            'releaseDate' => 'required|date'
        ]);
        
        $film = Film::create($request->all());
    
        return $film->title . ' has successfully been added.';
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Film $film)
    {
        return Film::find($film);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Film $film)
    {
        $film = Film::find($film->id);
        $film->update($request->all());

        return $film->title . "'s details have been updated.";

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Film $film)
    {
        Film::find($film->id)->delete();
        return 'Film has successfully been deleted.';
    }
}
