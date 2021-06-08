<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function ranking(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $datamahasiswa=[];

        $bobot_Dokumen="";
        $bobot_Prestasi_Pengalaman="";
        $bobot_Essay="";
        $bobot_IPK="";
        $bobot_Gaji="";

        $object = new SAwController();

        $datacalon = $object->normalisasi();

        foreach ($datacalon as $item){
            $datamahasiswa[] = $item;
        }

        $databenefit = DB::table("kriteria_benefit")->where("id_periode", "=", $datamahasiswa[0]->id_periode)->get();

        foreach ($databenefit as $item){
            if ($item->nama_kriteria == "Dokumen"){
                $bobot_Dokumen = $item->bobot_kriteria;
            }elseif ($item->nama_kriteria == "Prestasi dan Pengalaman"){
                $bobot_Prestasi_Pengalaman = $item->bobot_kriteria;
            }elseif ($item->nama_kriteria == "Essay"){
                $bobot_Essay = $item->bobot_kriteria;
            }elseif ($item->nama_kriteria == "IPK"){
                $bobot_IPK = $item->bobot_kriteria;
            }else{
                $bobot_Gaji = $item->bobot_kriteria;
            }
        }

        foreach ($datacalon as $item){
            $item->dokumen =  $item->dokumen*$bobot_Dokumen;
            $item->prestasi = $item->prestasi*$bobot_Prestasi_Pengalaman;
            $item->essay = $item->essay*$bobot_Essay;
            $item->ipk = $item->ipk*$bobot_IPK;
            $item->gaji = $item->gaji*$bobot_Gaji;
        }

        dd($datacalon);

    }
}
