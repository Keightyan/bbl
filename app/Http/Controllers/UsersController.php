<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index() {

    }

    public function show($id)
    {
        $user = User::find($id);
        $lectures = $user->lectures()->orderBy('created_at', 'desc')->paginate(4);

        $data = [
            'user' => $user,
            'lectures' => $lectures,
        ];

        return view('users.show', $data);        
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit',[
            'user' => $user,
        ]);        
    }

    public function destroy($id) {

        $user = User::find($id);

        if (\Auth::id() === $user->id) {
            $user->delete();
        }

        return back();
    }
}