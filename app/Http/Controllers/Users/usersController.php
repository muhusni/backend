<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class usersController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email')->get();
        return response()->json($users);
    }

    public function showUser($id) 
    {
        $user = User::findOrFail($id, ['id', 'name', 'email']);
        return response()->json($user);
    }
}
