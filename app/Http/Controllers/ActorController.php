<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        return view('actors.index')->with('actors', Actor::all());
    }

    public function create()
    {
        return view('actors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'biography' => 'required',
        ]);

        $actor = new Actor;
        $actor->name = $request->name;
        $actor->birth_date = $request->birth_date;
        $actor->biography = $request->biography;
        $actor->gender = $request->gender;
        $actor->image = $request->image;
        $actor->save();

        session()->flash('success', 'Actor created successfully!');

        return redirect()->route('actors.index');
    }

    public function show(string $id)
    {
        return view('actors.show')->with('actor', Actor::find($id));
    }

    public function edit(string $id)
    {
        $actor = Actor::find($id);

        return view('actors.edit')->with('actor', $actor);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'biography' => 'required',
        ]);

        $actor = Actor::find($id);
        $actor->name = $request->name;
        $actor->birth_date = $request->birth_date;
        $actor->biography = $request->biography;
        $actor->gender = $request->gender;
        $actor->image = $request->image;
        $actor->save();

        session()->flash('success', 'Actor updated successfully!');

        return redirect()->route('actors.index');
    }

    public function destroy(string $id)
    {
        $actor = Actor::find($id);
        $actor->delete();

        session()->flash('success', 'Actor deleted successfully!');

        return redirect()->route('actors.index');
    }
}
