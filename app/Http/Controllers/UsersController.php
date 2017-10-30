<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAddress;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('users.users_list', ['data' => $data]);
    }


}
