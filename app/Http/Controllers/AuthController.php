<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $user=new user();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->password=Hash::make($request->password);

        $user->save();

        return view('auth.login');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function logout()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::check() && Auth::user()->email === 'admin@gmail.com') 
            {
                 return redirect()->route('adminpage');
                }
            return redirect('/user');
        }
       

        return view('auth.login');
    }

}
