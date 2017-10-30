<?php

namespace App\Http\Controllers\Auth;

use App\UserAddress;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'login' => 'required|string|min:4|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'zip' => 'required|string',
            'country' => 'required|string|min:2|max:2',
            'city' => 'required|string',
            'street' => 'required|string',
            'house_number' => 'required|string',
            'extra_information' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        DB::transaction(function () use ($data){
            $user = User::create([
                'login' => $data['login'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

            UserAddress::create([
                'user_id' => $user->id,
                'zip' => $data['zip'],
                'country' => strtoupper($data['country']),
                'city' => $data['city'],
                'street' => $data['street'],
                'house_number' => $data['house_number'],
                'extra_information' => $data['extra_information'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'gender' => $data['gender']
            ]);
        });

        return $user;
    }
}
