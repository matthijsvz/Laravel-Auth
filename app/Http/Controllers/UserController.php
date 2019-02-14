<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function displayUsers() {
        $users = User::paginate(10);
        return view('overview', ['users' => $users]);
    }
}
