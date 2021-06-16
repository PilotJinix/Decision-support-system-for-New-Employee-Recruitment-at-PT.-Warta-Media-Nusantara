<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $murid = DB::table("users")->where("level", "user")->count();
        $pengajuaan = DB::table("calon_penerima")->count();
        $diterima = DB::table("calon_penerima")->where("status", "Lolos")->count();
        $periode = DB::table("periode_penerimaan")->count();

        return view('admin.dashboard.dashboard', compact("akun", "data_periode", "murid", "pengajuaan", "diterima", "periode"));
    }

    public function periode(Request $request){
        $request->validate([
            "name" => "required|string",
            "kategori" => "required|string",
            "kuota" => "required"
        ]);

        DB::table("periode_penerimaan")->insert([
            "name" => $request->name,
            "kategori" => $request->kategori,
            "kuota" => $request->kuota
        ]);

        return redirect()->route('dashboard')->with("saved", "Data Penerimaan Berhasil ditambahkan");
    }

    public function editperiode(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }

        $request -> validate([
            "editname" => "required|string",
            "editkategori" => "required|string",
            "editkuota" => "required|string",
            "editstatus" => "required|string",
        ]);

        DB::table("periode_penerimaan")->where("id", $id)->update([
            "name" => $request->editname,
            "kategori" => $request->editkategori,
            "kuota" => $request->editkuota,
            "status" => $request->editstatus,
        ]);
        return redirect(route("dashboard"));
    }

    public function deleteperiode(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }

        DB::table("periode_penerimaan")->where("id", $id)->delete();

        return redirect(route("dashboard"));
    }
}
