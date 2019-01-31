<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function showLoginUserForm()
    {
        return view('auth.signIn');
    }

    public function loginUser(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');
        if ($login === '111' && $password === '222') {
            return redirect()->route('welcome');
        }
        return view('auth.signIn', ['errorMessage' => 'Неправильный логин или пароль']);
    }

    public function showCreateUserForm(){
      return view('auth.signUp');
    }

    public function createUser(){
       return view('auth.signUp',['errorMessage' => 'User create successfully']);
    }
}
