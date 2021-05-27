<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only'=>'login']);
    }
    public function login(){
        return view('login');
    }
    public function auth(){
        $login = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        if(Auth::attempt($login)){
            return redirect('/dashboard');
        }else{
            return back()->withErrors(['auth'=>'the email or password are wrong']);
        };
    }
}
