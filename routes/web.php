<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//MAIN PAGE
Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');});
Route::get('/main', function () {return view('main');});
Route::get('/account', function () {return view('account');});
Route::post("/loginCheck", [LoginController::class, "loginCheck"]);
Route::get("/logout", [LoginController::class, "logout"]);
Route::get('/register', function () {return view('register');});

//LOGIN USERS
Route::post('login', function () {
    $credentials = request()->only('username', 'password');
    if (Auth::attempt($credentials)) {return 'you are logged ';}return 'error';
});

//FALLBACK
Route::fallback(function () {return view('welcome');});

//USERS
Route::get("/userList", [UserController::class, "all"]);
Route::get("/users/edit/{id}", [UserController::class, "edit"]);
Route::post("/users/editSend/{id}", [UserController::class, "editSend"]);
Route::view("/users/create", "users/newUser");
Route::post("/users/createSend", [UserController::class, "createSend"]);
Route::get("/users/delete/{id}", [UserController::class, "delete"]);

//GAMES
Route::get("/gameList", [GameController::class, "all"]);
Route::get("/games/edit/{id}", [GameController::class, "edit"]);
Route::post("/games/editSend/{id}", [GameController::class, "editSend"]);
Route::view("/games/create", "games/newGame");
Route::post("/games/createNew", [GameController::class, "createSend"]);
Route::get("/games/delete/{id}", [GameController::class, "delete"]);
Route::get("/games/infoGame/{id}", [GameController::class, "infoGame"]);

//BOOKS
Route::get("/bookList", [BookController::class, "all"]);
Route::get("/books/edit/{id}", [BookController::class, "edit"]);
Route::post("/books/editSend/{id}", [BookController::class, "editSend"]);
Route::get("/books/newBook", [BookController::class, "allUsers"]);
Route::post("/books/newBookSend", [BookController::class, "createSend"]);
Route::get("/books/delete/{id}", [BookController::class, "delete"]);

//ROOMS
Route::get("/roomList", [RoomController::class, "all"]);
Route::get("/rooms/edit/{id}", [RoomController::class, "edit"]);
Route::post("/rooms/editSend/{id}", [RoomController::class, "editSend"]);
Route::view("/rooms/create", "rooms/newRoom");
Route::get("/rooms/create", [RoomController::class, "allGames"]);
Route::post("/rooms/createSend", [RoomController::class, "createSend"]);
Route::get("/rooms/delete/{id}", [RoomController::class, "delete"]);

//Review
Route::get("/reviewList", [ReviewController::class, "all"]);
Route::get("/reviewListUser", [ReviewController::class, "reviewListUser"]);
Route::get("/reviews/edit/{id}", [ReviewController::class, "edit"]);
Route::post("/reviews/editSend/{id}", [ReviewController::class, "editSend"]);
Route::get("/reviews/create/{id}", [ReviewController::class, "allGames"]);
Route::post("/reviews/createSend", [ReviewController::class, "createSend"]);
Route::get("/reviews/delete/{id}", [ReviewController::class, "delete"]);
