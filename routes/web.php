<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

//MAIN PAGES
Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');});
Route::get('/register', function () {return view('register');});
Route::get('/account', function () {return view('account');});

//FALLBACK
Route::fallback(function () {return view('welcome');});

//GAMES
Route::get("/games",[GameController::class,"allGames"]);
Route::view("/games/newGame","games/newGame");
//Route::get("/games", [GameController::class, "newGame"]);
Route::post("/games/newGame",[GameController::class,"newGame"]);
Route::get("/games/edit/{id}",[GameController::class,"edit"]);
Route::post("/games/editGame/{id}",[GameController::class,"editGame"]);
Route::get("/games/delete/{id}",[GameController::class,"delete"]);

//USERS
Route::get("/users",[UserController::class,"allUsers"]);
Route::view("/users/newUser","users/newUser");
Route::get("/users/edit/{id}",[UserController::class,"edit"]);
Route::post("/users/editUser/{id}",[UserController::class,"editUser"]);
Route::get("/users/delete/{id}",[UserController::class,"delete"]);

//BOOKINGS
Route::get("/books",[BookController::class,"allBooks"]);
Route::view("/books/newBook","books/newBook");
Route::get("/books/edit/{id}",[BookController::class,"edit"]);
Route::post("/books/editBook/{id}",[BookController::class,"editBook"]);
Route::get("/books/delete/{id}",[BookController::class,"delete"]);

//ROOMS
Route::get("/rooms",[RoomController::class,"allRooms"]);
Route::view("/rooms/newRoom","rooms/newRoom");
Route::get("/rooms/edit/{id}",[RoomController::class,"edit"]);
Route::post("/rooms/editRoom/{id}",[RoomController::class,"editRoom"]);
Route::get("/rooms/delete/{id}",[RoomController::class,"delete"]);

