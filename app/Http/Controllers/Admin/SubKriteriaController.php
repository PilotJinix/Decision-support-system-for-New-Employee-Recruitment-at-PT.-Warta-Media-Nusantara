<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubKriteriaController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $dataperiode = DB::table("periode_penerimaan")->where("status", 0)->get();
        $datasubkriteria = DB::table("sub_kriteria")
            ->join("periode_penerimaan", "periode_penerimaan.id", "=", "sub_kriteria.id_periode")
            ->select("periode_penerimaan.name","sub_kriteria.*")->latest()->paginate(10);

        return view("admin.subKriteria.subKriteria", compact("akun", "datasubkriteria", "dataperiode"));
    }
}
