<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;

class LoginController extends Controller {

    public function create () {

        return view('auth.login');
    }

    public function store(Request $request) {

        if(auth()->attempt(request(['email','password'])))
        {
            return back()->withErrors([
                'message' => "Bad credentials. Please try again"
            ]);
        }

        session()->flash('message', 'Bas mi je drago sto si ovde');

        return redirect('/teams');
    }

    public function logout() {

        return redirect('/teams');
    }
}