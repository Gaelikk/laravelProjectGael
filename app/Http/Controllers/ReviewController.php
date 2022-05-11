<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use App\Models\Game;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function all(): Factory|View|Application
    {
        return view("reviews/reviewList", [
            "reviews" => Review::all(),
            "users" => User::all(),
            "games" => Game::all()
        ]);
    }

    public function reviewListUser(): Factory|View|Application
    {
        $books = Book::where('user', '=', Auth::user()->id)->get();
        return view("reviews/reviewListUser", [
            "books" => $books,
        ]);
    }

    public function allGames($id): Factory|View|Application
    {
        return view("reviews/newReview", [
            'reserva' => Book::findOrFail($id),
        ]);
    }

    public function edit($id): Factory|View|Application
    {
        return view('reviews/editReview', [
            'reviews' => Review::findOrFail($id)
        ]);
    }

    public function editSend($id, Request $request): Redirector|Application|RedirectResponse
    {
        $review = Review::findOrFail($id);
        $review->reserva = $request->reserva;
        $review->comment = $request->comment;
        $review->username = $request->username;
        $review->save();
        return redirect('reviewList');
    }

    public function createSend(Request $request): Redirector|Application|RedirectResponse
    {
        $review = new Review();
        $review->reserva = $request->reserva;
        $review->comment = $request->comment;
        $review->username = $request->username;
        $review->save();
        return redirect('/');
    }

    public function delete($id): Redirector|Application|RedirectResponse
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect('reviewList');
    }
}
