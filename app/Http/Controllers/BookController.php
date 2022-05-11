<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Room;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BookController extends Controller
{
    public function all(): Factory|View|Application
    {
        return view("books/bookList", [
            "books" => Book::all()
        ]);
    }

    public function allUsers(): Factory|View|Application
    {
        return view("books/newBook", [
            "users" => User::all(),
            "rooms" => Room::all()
        ]);
    }


    public function edit($id): Factory|View|Application
    {
        return view('books/editBook', [
            'reserva' => Book::findOrFail($id),
            "users" => User::all(),
            "rooms" => Room::all()
        ]);
    }

    public function editSend($id, Request $request): Redirector|Application|RedirectResponse
    {
        $book = Book::findOrFail($id);
        $book->room = $request->room;
        $book->game = $request->game;
        $book->user = $request->user;
        $book->data = $request->data;
        $book->save();

        return redirect('bookList');
    }

    public function createSend(Request $request): Redirector|Application|RedirectResponse
    {
        $book = new Book();
        $book->room = $request->room;
        $book->game = $request->game;
        $book->user = $request->user;
        $book->data = $request->data;
        $book->save();
        return redirect('bookList');
    }

    public function delete($id): Redirector|Application|RedirectResponse
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('bookList');
    }
}
