<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use mysql_xdevapi\Exception;

class LoginController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get('username');

        if ($session != null){
            return redirect(route('dashboard'));
        }

        return view("auth.login");
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        $credentials = $request -> only('username', 'password');

        if (Auth::attempt($credentials)){
            $request->session()->put('username', $request->username);
            return redirect(route('dashboard'));
        }

        return redirect(route('index'))->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout(Request $request){
        $request -> session()->forget('username');
        Auth::logout();

        return redirect(route('index'));
    }
}
