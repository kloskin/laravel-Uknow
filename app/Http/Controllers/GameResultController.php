<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameResultController extends Controller
{
    public function index()
    {
        $gameResults = GameResult::all();
        return view('game_results.index', compact('gameResults'));
    }

    public function show(GameResult $gameResult)
    {
        return view('game_results.show', compact('gameResult'));
    }

    public function create()
    {
        return view('game_results.create');
    }

    public function store(Request $request)
    {
        GameResult::create($request->all());
        return redirect()->route('game_results.index');
    }

    public function edit(GameResult $gameResult)
    {
        return view('game_results.edit', compact('gameResult'));
    }

    public function update(Request $request, GameResult $gameResult)
    {
        $gameResult->update($request->all());
        return redirect()->route('game_results.show', $gameResult);
    }

    public function destroy(GameResult $gameResult)
    {
        $gameResult->delete();
        return redirect()->route('game_results.index');
    }
}
