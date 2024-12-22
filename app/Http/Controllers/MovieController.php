<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index')->with('movies', Movie::all());
    }

    public function create()
    {
        return view('movies.create')->with('actors', Actor::all());
    }

    public function store(Request $request)
    {
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

        $movie = new Movie;
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->director = $request->director;
        $movie->image = $request->image;
        $movie->save();

        $movie->actors()->attach($request->actors);

        session()->flash('success', 'Movie created successfully!');

        return redirect()->route('movies.index');
    }

    public function show(string $id)
    {
        return view('movies.show')->with('movie', Movie::find($id));
    }

    public function edit(string $id)
    {
        $movie = Movie::with('actors')->find($id);
        $actors = Actor::all();

        return view('movies.edit', compact('movie', 'actors'));
    }

    public function update(Request $request, string $id)
    {
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

        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->year = $request->year;
        $movie->genre = $request->genre;
        $movie->director = $request->director;
        $movie->image = $request->image;
        $movie->actors()->sync($request->actors);
        $movie->save();

        session()->flash('success', 'Movie updated successfully!');

        return redirect()->route('movies.index');
    }

    public function destroy(string $id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        session()->flash('success', 'Movie deleted successfully!');

        return redirect()->route('movies.index');
    }
}
