<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        if($user == null)
        {
            abort(404);
        }
        return response()->json($user);
    }
}
