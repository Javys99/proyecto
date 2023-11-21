<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/login/home');
        }
        return view('login.login');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());

        return redirect('/login')->with('exitó', 'Cuenta registrada con exitó');
    }
}
