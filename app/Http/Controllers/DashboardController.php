<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }

        $data_periode = DB::table("periode_penerimaan")->paginate(10);

        $akun = DB::table('users')->where('username', $session)->first();
        return view('dashboard', compact("akun", "data_periode"));
    }

    public function periode(Request $request){
        $request->validate([
            "name" => "required|string",
            "kategori" => "required|string",
        ]);

        DB::table("periode_penerimaan")->insert([
            "name" => $request->name,
            "kategori" => $request->kategori,
        ]);

        return redirect()->route('dashboard')->with("saved", "Data Penerimaan Berhasil ditambahkan");
    }

    public function editpenerimaan(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }

        $datapenerimaan = DB::table("periode_penerimaan")->where("id", $id)->first();

        return view("dashboard", compact("datapenerimaan"));

    }
}
