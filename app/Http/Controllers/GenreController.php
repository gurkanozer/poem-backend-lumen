<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAll()
    {
        return response()->json(Genre::with('poems')->get());
    }
    public function show($id)
    {
        return response()->json(Genre::with('poems')->find($id));
    }
    public function save()
    {
        $genre = Genre::create(request()->all());
        return response()->json(Genre::with('poems')->find($genre->id));
    }
    public function update($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->update(request()->all());
        return response()->json(Genre::with('poems')->find($genre->id));
    }

    public function delete($id)
    {
        Genre::findOrFail($id)->delete();
        return response()->json(true);
    }
}
