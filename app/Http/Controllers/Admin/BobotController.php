<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BobotController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $dataperiode = DB::table("periode_penerimaan")->where("status", 0)->get();
        $databobot = DB::table("bobot_kriteria")
            ->join("periode_penerimaan", "periode_penerimaan.id", "=", "bobot_kriteria.id_periode")
            ->select("periode_penerimaan.name","bobot_kriteria.*")->latest()->paginate(10);

        return view("admin.bobot.bobot", compact("akun", "databobot", "dataperiode"));
    }

    public function bobot(Request $request){
        $request->validate([
           "id_periode" => "required",
            "name" => "required|string",
            "bobot" => "required|string"
        ]);

        DB::table("bobot_kriteria")->insert([
            "id_periode" => $request->id_periode,
            "nama_bobot" => $request->name,
            "bobot" => $request->bobot
        ]);

        return redirect()->route('bobot')->with("saved", "Data Berhasil ditambahkan");
    }

    public function editbobot(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $request->validate([
            "editnama" => "required|string",
            "editbobot" => "required|string"
        ]);

        DB::table("bobot_kriteria")->where("id", $id)->update([
            "nama_bobot" => $request->editnama,
            "bobot" => $request->editbobot,
        ]);

        return redirect(route("bobot"));
    }

    public function deletebobot(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        DB::table("bobot_kriteria")->where("id", $id)->delete();

        return redirect(route("bobot"));
    }
}
