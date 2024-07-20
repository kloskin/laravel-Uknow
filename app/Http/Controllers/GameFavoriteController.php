<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameFavoriteController extends Controller
{
    public function index()
    {
        return view('favorites.index');
    }

    public function store(Request $request)
    {
        Favorite::create($request->all());
        return redirect()->back();
    }

    public function destroy(Favorite $favorite)
    {
        $favorite->delete();
        return redirect()->back();
    }
}
