<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddresses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    public function index()
    {
        $userProfiles = User::paginate(5);
        return view('users.users_list', ['data' => $userProfiles]);
    }

    public function editUser(Request $request)
    {
        $userId = $request->input('user_id');

        $userAddresses = UserAddresses::where('user_id', $userId)->paginate(5);

        return view('users.edit_user', ['userAddresses' => $userAddresses->appends(Input::except('page'))]);
    }

    public function deleteUser(Request $request)
    {
        $user_id = $request->input('user_id');
        
        User::find($user_id)->delete();

        return redirect('/users_list');
    }

    public function editUserAddresses(Request $request)
    {
        $userAddress = UserAddresses::
    }
}
