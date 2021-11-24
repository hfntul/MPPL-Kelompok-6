<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminsControllers extends Controller
{
    public function store(Request $request){

        //You should add validation before creating the user.
     
        $user = Admin::create([
           "email" => $request->email,
           "password" => bcrypt($request->password),
           "ormawa" => $request->ormawa
        ]);
     
        if(!$user){
           return redirect('/register');
        } else {
            return redirect('/login');
        }
     
        // return response(["user" => $user], 200);
     
     }

    public function login(Request $request)
    {
        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];

        if (Auth::Attempt($request->only('email', 'password'))) {
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
}
