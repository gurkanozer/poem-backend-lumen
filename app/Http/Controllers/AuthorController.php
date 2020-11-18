<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAll()
    {
        return response()->json(Author::with('poems')->get());
    }

    public function show($id)
    {
        return response()->json(Author::with('poems')->find($id));
    }

    public function save()
    {
        $author = Author::create(request()->all());
        return response()->json(Author::with('poems')->find($author->id));
    }

    public function update($id)
    {
        $author = Author::findOrFail($id);
        $author->update(request()->all());
        return response()->json(Author::with('poems')->find($author->id));
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response()->json(true);
    }
}
