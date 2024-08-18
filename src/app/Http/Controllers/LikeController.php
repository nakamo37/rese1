<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LikeController extends Controller
{
    public function store($shopId)
    {
        Auth::user()->like($shopId);
        return 'ok!'; 
    }

    public function destroy($shopId)
    {
        Auth::user()->unlike($shopId);
        return 'ok!'; 
    }
}
