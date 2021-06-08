<?php

namespace App\Http\Controllers\Admin;


use App\CalonPenerima;
use App\Http\Controllers\Controller;
use App\PeriodePenerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalonPenerimaController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $dataperiode = DB::table("periode_penerimaan")->where("status", 0)->get();
        $datacalon = DB::table("calon_penerima")
            ->join("periode_penerimaan", "periode_penerimaan.id", "=", "calon_penerima.id_periode")
            ->where("periode_penerimaan.status", "=", 0)
            ->select("periode_penerimaan.name","calon_penerima.*")->latest()->paginate(10);


        return view("admin.dataCalonPenerima.dataCalonPenerima", compact("datacalon", "akun", "dataperiode"));
    }

    public function calonPenerima(Request $request){
        $request->validate([
            "id_periode" => "required",
            "name" => "required|string",
            "nim" => "required|string",
            "dokumen" => "required|string",
            "ipk" => "required|string",
            "wawancara" => "required|string",
            "gaji" => "required|string",
        ]);

        DB::table("calon_penerima")->insert([
            "id_periode"=> $request->id_periode,
            "nama" => $request->name,
            "nim" => $request->nim,
            "dokumen" => $request->dokumen,
            "prestasi" => $request->ipk,
            "wawancara" => $request->wawancara,
            "gaji" => $request->gaji
        ]);

        return redirect()->route('calonpenerima')->with("saved", "Data Berhasil ditambahkan");
    }

    public function editcalonPenerima(Request $request, $id){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $request->validate([
            "editname" => "required|string",
            "editnim" => "required|string",
            "editdokumen" => "required|string",
            "editipk" => "required|string",
            "editwawancara" => "required|string",
            "editgaji" => "required|string",
            "editstatus" => "required|string"
        ]);

        DB::table("calon_penerima")->where("id", $id)->update([
            "nama" => $request->editname,
            "nim" => $request->editnim,
            "dokumen" => $request->editdokumen,
            "prestasi" => $request->editipk,
            "wawancara" => $request->editwawancara,
            "gaji" => $request->editgaji,
            "status" => $request->editstatus,
        ]);

        return redirect(route("calonpenerima"));

    }

}
