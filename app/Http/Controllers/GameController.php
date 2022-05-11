<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Room;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class GameController extends Controller
{

    public function __invoke(): Factory|View|Application
    {
        $games = Game::all();
        return view('main')->with("games", $games);
    }

    public function all(): Factory|View|Application
    {
        return view("games/gameList", [
            "games" => Game::all()
        ]);
    }

    public function edit($id): Factory|View|Application
    {
        return view('games/editgame', [
            'game' => Game::findOrFail($id)
        ]);
    }

    public function infoGame($id): Factory|View|Application
    {
        return view('games/infoGame', [
            'game' => Game::findOrFail($id),
            "rooms" => Room::all(),
            "users" => User::all()
        ]);
    }

    public function editSend($id, Request $request): Redirector|Application|RedirectResponse
    {
        $game = Game::findOrFail($id);
        $game->name = $request->name;
        $game->organization = $request->organization;
        $game->image = $request->image;
        $game->save();
        return redirect('gameList');
    }

    public function createSend(Request $request): Redirector|Application|RedirectResponse
    {
        $game = new Game();
        $game->name = $request->name;
        $game->organization = $request->organization;
        $game->image = $request->image;
        $game->save();
        return redirect('gameList');
    }

    public function delete($id): Redirector|Application|RedirectResponse
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect('gameList');
    }
}
