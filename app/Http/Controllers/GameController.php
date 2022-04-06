<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function allGames(){
        return view("games/games",[
            "games"=> game::all()
        ]);
    }

    public function edit($id)
    {
        return view('games/editGame', [
            'game' => game::findOrFail($id)
        ]);
    }

    public function editGame($id, Request $request){
        $game = game::findOrFail($id);
        $game->name = $request->name;
        $game->organitzation = $request->organitzation;
        $game->save();
        return redirect('games');
    }

    public function newGame(Request $request){
        $game = new game();
        $game->name = $request->name;
        $game->organitzation = $request->organitzation;
        $game->save();
        return redirect('games/newGame');
    }

    public function delete($id)
    {
        $game = game::findOrFail($id);
        $game->delete();
        return redirect('games');
    }
}
