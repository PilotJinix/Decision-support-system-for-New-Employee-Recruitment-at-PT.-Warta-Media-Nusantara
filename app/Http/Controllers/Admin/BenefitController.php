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
        $databenefit = DB::table("kriteria_benefit")->paginate(10);

        return view("admin.benefit.benefit", compact("akun", "databenefit"));
    }

    public function benefit(Request $request){
        $request->validate([
            "name" => "required|string",
            "sifat_kriteria" => "required|string"
        ]);

        DB::table("kriteria_benefit")->insert([
           "nama_kriteria" => $request->name,
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
            "editsifat" => "required|string"
        ]);

        DB::table("kriteria_benefit")->where("id", $id)->update([
            "nama_kriteria" => $request->editnama,
            "sifat_kriteria" => $request->editsifat
        ]);

        return redirect(route("benefit"));
    }
}
