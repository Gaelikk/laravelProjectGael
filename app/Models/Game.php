<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Game extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /*public function rooms(){
        return $this->hasMany(Room::class);
    }
    */


    public $timestamps = false;

}
