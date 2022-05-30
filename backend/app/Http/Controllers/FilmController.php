<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:film-list|film-create|film-edit|film-delete', ['only' => ['index','show']]);
         $this->middleware('permission:film-create', ['only' => ['create','store']]);
         $this->middleware('permission:film-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:film-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::latest()->paginate(5);
        return view('films.index',compact('films'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'director' => 'required',
            'producer' => 'required',
            'boxOffice' => 'required',
            'releaseDate' => 'required',
        ]);
    
        Film::create($request->all());
    
        return redirect()->route('films.index')
                        ->with('success','Film created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('films.show',compact('film'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('films.edit',compact('film'));
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
         request()->validate([
            'title' => 'required',
            'director' => 'required',
            'producer' => 'required',
            'boxOffice' => 'required',
            'releaseDate' => 'required',
        ]);
    
        $film->update($request->all());
    
        return redirect()->route('films.index')
                        ->with('success','Film updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
    
        return redirect()->route('films.index')
                        ->with('success','Film deleted successfully');
    }
}