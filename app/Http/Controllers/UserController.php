<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        return response()->json(['user' => auth()->user()]);
    }
    public function update()
    {
        $user = auth()->user();
        $user->update(request()->all());
        return response()->json(['user' => auth()->user()]);
    }
}
