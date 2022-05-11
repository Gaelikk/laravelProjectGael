<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        //ADMIN
        $user = new User();
        $user->name = 'admin';
        $user->surname = 'admin';
        $user->email = 'admin@cirvianum.cat';
        $user->username = 'admin';
        $user->password = Hash::make('1234');
        $user->role = '1';
        $user->save();

        //GAME
        $game = new Game();
        $game->name = 'ScapeRoom';
        $game->organization = 'ScapeRoom Cirvianum';
        $game->image = 'https://www.resistanceroom.com/wp-content/uploads/escape-room-1-768x515.jpg';
        $game->save();

        //ROOM
        $room = new Room();
        $room->name = '1ra Room';
        $room->image = 'https://img.blogs.es/anexom/wp-content/uploads/2020/05/destacada_escape_room.jpg';
        $room->game = '1';
        $room->save();
    }
}
