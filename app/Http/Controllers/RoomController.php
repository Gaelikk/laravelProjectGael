<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Room;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class RoomController extends Controller
{
    public function all(): Factory|View|Application
    {
        return view("rooms/roomList", [
            "rooms" => Room::all()
        ]);
    }

    public function allGames(): Factory|View|Application
    {
        return view("rooms/newRoom", [
            "games" => Game::all()
        ]);
    }


    public function edit($id): Factory|View|Application
    {
        return view('rooms/editroom', [
            'room' => Room::findOrFail($id),
            "games" => Game::all()
        ]);
    }

    public function editSend($id, Request $request): Redirector|Application|RedirectResponse
    {
        $room = Room::findOrFail($id);
        $room->name = $request->name;
        $room->image = $request->image;
        $room->game = $request->game;
        $room->save();

        return redirect('roomList');
    }

    public function createSend(Request $request): Redirector|Application|RedirectResponse
    {
        $room = new Room();
        $room->name = $request->name;
        $room->image = $request->image;
        $room->game = $request->game;
        $room->save();
        return redirect('roomList');
    }

    public function delete($id): Redirector|Application|RedirectResponse
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('roomList');
    }
}
