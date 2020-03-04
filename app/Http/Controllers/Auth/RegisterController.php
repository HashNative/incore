<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
  

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'title' => 'required',
            'gender' => 'required',
            'dob' => 'required|date',
            'nic' => 'required|string|max:12',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'languages' => 'required',
            'type' =>'required',
            'mobile_number'=>'required|max:13|regex:/[077][0-9]{9}/'
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
       
        return User::create([
            'title' => $data['title'],
            'name' => $data['name'],
            'email' => $data['email'],
           
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'nic' => $data['nic'],
            'address' => $data['address'],
            'type' => $data['type'],
            'password' => bcrypt($data['password']),
            'languages' =>implode(',',$data['languages']),
            'mobile_number'=>$data['mobile_number']
        ]);
    }
}
