<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        User::create($form);
        return view('done');
    }

    public function login(){
        return view('login');
    }

    public function done()
    {
        return view('done');
    }
}
