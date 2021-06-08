<?php

namespace App\Http\Controllers\Mahasiswa;

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
        return view('mahasiswa.dashboard.dashboard', compact("akun", "data_periode"));
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

    public function editperiode(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }

        $request -> validate([
            "editname" => "required|string",
            "editkategori" => "required|string",
            "editstatus" => "required|string",
        ]);

        DB::table("periode_penerimaan")->where("id", $id)->update([
            "name" => $request->editname,
            "kategori" => $request->editkategori,
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
