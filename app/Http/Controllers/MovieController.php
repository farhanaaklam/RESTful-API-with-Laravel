<?php

namespace App\Http\Controllers;
use Session;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $movies = Movie::all();
        return view('movie.index')->with('movies', $movies);
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(Request $request)
    {
        Movie::create([
            'season' => $request->season,
            'episode' => $request->episode,
            'quote' => $request->quote
        ]);
        Session::flash('success', 'Tv Show added successfully');
        return redirect()->back();

        //dd($request->all());
        
    }

  
    public function show(Movie $movie, $id)
    {
        $movie = Movie::find($id);
        return view('movie.show', ['movie' => $movie]);
    }

 
    public function edit(Movie $movie, $id)
    {
        $movie = Movie::find($id);
        return view('movie.edit', ['movie' => $movie]);
    }


    public function update(Request $request, Movie $movie, $id)
    {
        $movie = Movie::find($id);
        $movie->season = $request->season;
        $movie->episode = $request->episode;
        $movie->quote = $request->quote;
        $movie->save();
        Session::flash('success', 'Tv Show Updated successfully');
        return redirect()->back();
    }

    
    public function destroy(Request $request)
    {
        $movie = Movie::find($request->id);
        $movie->delete();
        Session::flash('success', 'Tv Show Deleted successfully');
        return redirect()->back();
    }
}
