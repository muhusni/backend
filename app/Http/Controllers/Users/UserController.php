<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'username')->get();
        return response()->json($users);
    }

    public function show($id) 
    {
        $user = User::findOrFail($id, ['id', 'name', 'email', 'username']);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'username' => ['required', 'unique:users'],
            'name' => ['required'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($user) return response()->json(['message' => 'berhasil menambah user']);
    }
}
