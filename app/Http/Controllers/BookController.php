<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function allBooks()
    {
        return view("books/books", [
            "books" => Book::all()
        ]);
    }

    public function edit($id)
    {
        return view('books/editBook', [
            'book' => Book::findOrFail($id)
        ]);
    }

    public function editBook($id, Request $request)
    {
        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->mail = $request->mail;
        $book->phoneNumber = $request->phoneNumber;
        $book->country = $request->country;
        $book->username = $request->username;
        $book->room = $request->room;
        $book->save();
        return redirect('books');
    }

    public function newBook(Request $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->mail = $request->mail;
        $book->phoneNumber = $request->phoneNumber;
        $book->country = $request->country;
        $book->username = $request->username;
        $book->room = $request->room;
        $book->save();
        return redirect('books');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('books');
    }
}
