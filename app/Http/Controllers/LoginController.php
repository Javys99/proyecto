<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/login/home');
        }
        return view('login.login');
    }
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(Auth::validate($credentials)){
            return redirect()->to('/login/home')->withErrors('auth.failed');

        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request,$user);
    }

    public function authenticated(Request $request, $user){
        return redirect('/login/login');
    }


}
