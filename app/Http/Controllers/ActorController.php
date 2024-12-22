<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('actors.index')->with('actors', Actor::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'biography' => 'required',
        ]);

        // Create actor
        $actor = new Actor;
        $actor->name = $request->name;
        $actor->birth_date = $request->birth_date;
        $actor->biography = $request->biography;
        $actor->save();

        // Flash success message
        session()->flash('success', 'Actor created successfully!');

        return redirect()->route('actors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('actors.show')->with('actor', Actor::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Retrieve the movie and eager load its associated actors
        $actor = Actor::find($id);

        return view('actors.edit')->with('actor', $actor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'biography' => 'required',
        ]);

        // Update actor
        $actor = Actor::find($id);
        $actor->name = $request->name;
        $actor->birth_date = $request->birth_date;
        $actor->biography = $request->biography;
        $actor->save();

        // Flash success message
        session()->flash('success', 'Actor updated successfully!');

        return redirect()->route('actors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete movie
        $actor = Actor::find($id);
        $actor->delete();

        // Flash success message
        session()->flash('success', 'Actor deleted successfully!');

        return redirect()->route('actors.index');
    }
}
