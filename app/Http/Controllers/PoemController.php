<?php

namespace App\Http\Controllers;

use App\Models\Poem;

class PoemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAll()
    {
        return response()->json(Poem::with('author')->get());
    }

    public function show($id)
    {
        return response()->json(Poem::with('author')->find($id));
    }

    public function save()
    {
        $poem = Poem::create(request()->all());

        return response()->json(Poem::with('author')->find($poem->id));
    }

    public function update($id)
    {
        $poem = Poem::findOrFail($id);
        $poem->update(request()->all());
        return response()->json(Poem::with('author')->find($poem->id));
    }

    public function delete($id)
    {
        Poem::findOrFail($id)->delete();
        return response()->json(true);
    }
}
