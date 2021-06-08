<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            if (Auth::user()->level == "admin"){
                return redirect(route('dashboard'));
            }else{
                return redirect(route('dashboard-mahasiswa'));
            }
        }

        return redirect(route('index'))->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function register(){
        return view("auth.register");
    }

    public function registercreate(Request $request){
        $request -> validate([
            "username"=> 'required|string|max:100|regex:/^\S*$/u|unique:users',
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|regex:/^\S*$/u|unique:users',
            "email" => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        DB::table("users")->insert([
            'username' => $request->username,
            'nama_lengkap' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect(route("index"));
    }

    public function logout(Request $request){
        $request -> session()->forget('username');
        Auth::logout();

        return redirect(route('index'));
    }
}
