<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('games.all-games');
    }
    public function show($game)
    {
        return view('games.game-site',[
            'game' => $game
        ]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        Game::create($request->all());
        return redirect()->route('games.index');
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('games.show', $game);
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
