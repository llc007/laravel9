<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    //

    public function store(Request $request){
        $request->validate([
            'email'=> ['required', 'string','email'],
            'password'=> ['required', 'string'],
        ]);
    }
}
