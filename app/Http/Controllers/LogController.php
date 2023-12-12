<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function login()
    {
        return view("sign in");
    }

    public function register() {
        return view("sign in");
    }
    public function handleRegister(Request $request){
        $user = User::create([
            'username' => $request->get('username'),
            'email' => $request -> get('email'),
            'password' => Hash::make($request->get('password'))
        ]);
    }
    public function handleLogin(Request $request) {
        $credentials = $request -> validate([
            'username' => 'required|username',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return ;
        }

        return back()-> withErrors("");
        }

}
