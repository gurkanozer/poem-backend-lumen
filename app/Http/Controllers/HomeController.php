<?php

namespace App\Http\Controllers;

use App\Models\Poem;
use App\Models\Author;
use App\Models\Genre;

class HomeController extends Controller
{
    public function showAllPoems()
    {
        return response()->json(Poem::with('author')->get());
    }
    public function showAllAuthors()
    {
        return response()->json(Author::with('poems')->get());
    }
    public function showAllGenres()
    {
        return response()->json(Genre::with('poems')->get());
    }
}
