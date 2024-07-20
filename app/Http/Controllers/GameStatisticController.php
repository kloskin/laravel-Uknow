<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameStatisticController extends Controller
{
    public function index()
    {
        return view('games.leaderboards');
    }

    public function show(GameStatistic $gameStatistic)
    {
        return view('game_statistics.show', compact('gameStatistic'));
    }

    public function create()
    {
        return view('game_statistics.create');
    }

    public function store(Request $request)
    {
        GameStatistic::create($request->all());
        return redirect()->route('game_statistics.index');
    }

    public function edit(GameStatistic $gameStatistic)
    {
        return view('game_statistics.edit', compact('gameStatistic'));
    }

    public function update(Request $request, GameStatistic $gameStatistic)
    {
        $gameStatistic->update($request->all());
        return redirect()->route('game_statistics.show', $gameStatistic);
    }

    public function destroy(GameStatistic $gameStatistic)
    {
        $gameStatistic->delete();
        return redirect()->route('game_statistics.index');
    }
}
