<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function allRooms()
    {
        return view("rooms/rooms", [
            "rooms" => Room::all()
        ]);
    }

    public function edit($id)
    {
        return view('rooms/editRoom', [
            'room' => Room::findOrFail($id)
        ]);
    }

    public function editRoom($id, Request $request)
    {
        $room = Room::findOrFail($id);
        $room->name = $request->name;
        $room->image = $request->image;
        $room->game = $request->game;
        $room->save();
        return redirect('rooms');
    }

    public function newRoom(Request $request)
    {
        $room = new Room();
        $room->name = $request->name;
        $room->image = $request->image;
        $room->game = $request->game;
        $room->save();
        return redirect('rooms');
    }

    public function delete($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('rooms');
    }
}
