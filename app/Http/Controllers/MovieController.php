<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index')->with('movies', Movie::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create')->with('actors', Actor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'image' => 'required',
            'actors' => 'required|array',
            'actors.*' => 'exists:actors,id',
        ]);

        // Create movie
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->director = $request->director;
        $movie->image = $request->image;
        $movie->save();

        // Attach actors to movie
        $movie->actors()->attach($request->actors);

        // Flash success message
        session()->flash('success', 'Movie created successfully!');

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('movies.show')->with('movie', Movie::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Retrieve the movie and eager load its associated actors
        $movie = Movie::with('actors')->find($id);

        // Retrieve all actors for the select input
        $actors = Actor::all();

        return view('movies.edit', compact('movie', 'actors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validate request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'image' => 'required',
            'actors' => 'required|array',
            'actors.*' => 'exists:actors,id',
        ]);

        // Update movie
        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->director = $request->director;
        $movie->image = $request->image;
        $movie->actors()->sync($request->actors);
        $movie->save();

        // Flash success message
        session()->flash('success', 'Movie updated successfully!');

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete movie
        $movie = Movie::find($id);
        $movie->delete();

        // Flash success message
        session()->flash('success', 'Movie deleted successfully!');

        return redirect()->route('movies.index');
    }
}
