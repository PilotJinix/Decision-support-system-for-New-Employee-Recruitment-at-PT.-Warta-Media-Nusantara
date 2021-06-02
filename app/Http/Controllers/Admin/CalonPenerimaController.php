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

        $dataperiode = DB::table("periode_penerimaan")->where("status", 0)->first();
        if ($dataperiode != null){
            $datacalon = DB::table("calon_penerima")->where("id_periode", $dataperiode->id)->paginate(10);
        }else{
            $datacalon = DB::table("calon_penerima")->paginate(10);
        }


        return view("admin.dataCalonPenerima.dataCalonPenerima", compact("datacalon", "akun"));
    }
}
