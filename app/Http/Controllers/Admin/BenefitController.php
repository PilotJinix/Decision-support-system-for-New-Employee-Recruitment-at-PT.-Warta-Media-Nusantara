<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BenefitController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();


        $dataperiode = DB::table("periode_penerimaan")->where("status", 0)->get();
        $databenefit = DB::table("kriteria_benefit")
            ->join("periode_penerimaan", "periode_penerimaan.id", "=", "kriteria_benefit.id_periode")
            ->where("periode_penerimaan.status", 0)
            ->select("periode_penerimaan.name","kriteria_benefit.*")->latest()->paginate(10);


        return view("admin.benefit.benefit", compact("akun", "databenefit", "dataperiode"));
    }

    public function benefit(Request $request){
        $request->validate([
            "id_periode" => "required",
            "name" => "required|string",
            "sifat_kriteria" => "required|string",
            "bobot_kriteria" => "required|string"
        ]);

        DB::table("kriteria_benefit")->insert([
            "id_periode"=> $request->id_periode,
            "nama_kriteria" => $request->name,
            "bobot_kriteria" => $request->bobot_kriteria,
            "sifat_kriteria" => $request->sifat_kriteria


        ]);

        return redirect()->route('benefit')->with("saved", "Data Berhasil ditambahkan");
    }

    public function editbenefit(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $request -> validate([
            "editnama" => "required|string",
            "editsifat" => "required|string",
            "editbobot" => "required|string"
        ]);

        DB::table("kriteria_benefit")->where("id", $id)->update([
            "nama_kriteria" => $request->editnama,
            "sifat_kriteria" => $request->editsifat,
            "bobot_kriteria" => $request->editbobot,
        ]);

        return redirect(route("benefit"));
    }

    public function deletebenefit(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        DB::table("kriteria_benefit")->where("id", $id)->delete();

        return redirect(route("benefit"));
    }

}
