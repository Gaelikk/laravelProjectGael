<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function all(): Factory|View|Application
    {
        return view("users/userList", [
            "users" => User::all()
        ]);
    }

    public function edit($id): Factory|View|Application
    {
        return view('users/editUser', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function editSend($id, Request $request): Redirector|Application|RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('userList');
    }

    public function createSend(Request $request): Redirector|Application|RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('userList');
    }

    public function createSendRegister(Request $request): Redirector|Application|RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('login');
    }

    public function delete($id): Redirector|Application|RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('userList');
    }
}
