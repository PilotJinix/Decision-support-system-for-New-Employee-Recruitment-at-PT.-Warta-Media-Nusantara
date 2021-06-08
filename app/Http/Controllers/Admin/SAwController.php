<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SAwController extends Controller
{
    public function normalisasi(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();

        $datakriteria =[];
        $datamahasiswa=[];

        $sort_Dokumen = [];
        $sort_Prestasi_Pengalaman = [];
        $sort_Essay = [];
        $sort_IPK = [];
        $sort_Gaji = [];

        $sifat_Dokumen="";
        $sifat_Prestasi_Pengalaman="";
        $sifat_Essay="";
        $sifat_IPK="";
        $sifat_Gaji="";

        $datacalon = DB::table("calon_penerima")
            ->join("periode_penerimaan", "periode_penerimaan.id", "=", "calon_penerima.id_periode")
            ->join("users", "users.id", "=", "calon_penerima.id_user")
            ->where("periode_penerimaan.status", "=", 0)
            ->select("periode_penerimaan.id","periode_penerimaan.name","users.nama_lengkap","users.nim","calon_penerima.*")->get();

        foreach ($datacalon as $item){
            $datamahasiswa[] = $item;
            $sort_Dokumen[] = $item -> dokumen;
            $sort_Prestasi_Pengalaman[] = $item -> prestasi;
            $sort_Essay[] = $item -> essay;
            $sort_IPK[] = $item -> ipk;
            $sort_Gaji[] = $item -> gaji;
        }


        $databenefit = DB::table("kriteria_benefit")->where("id_periode", "=", $datamahasiswa[0]->id_periode)->get();

        foreach ($databenefit as $item){
            $datakriteria[] = $item;
        }

        foreach ($datakriteria as $item){
            if ($item->nama_kriteria == "Dokumen"){
                $sifat_Dokumen = $item->sifat_kriteria;
            }elseif ($item->nama_kriteria == "Prestasi dan Pengalaman"){
                $sifat_Prestasi_Pengalaman = $item->sifat_kriteria;
            }elseif ($item->nama_kriteria == "Essay"){
                $sifat_Essay = $item->sifat_kriteria;
            }elseif ($item->nama_kriteria == "IPK"){
                $sifat_IPK = $item->sifat_kriteria;
            }else{
                $sifat_Gaji = $item->sifat_kriteria;
            }
        }

        foreach ($datacalon as $item){
            if ($sifat_Dokumen == "benefit"){
                $item->dokumen = $item->dokumen/max($sort_Dokumen);
            }elseif ($sifat_Dokumen == "cost"){
                $item->dokumen = min($sort_Dokumen)/$item->dokumen;
            }if ($sifat_Prestasi_Pengalaman == "benefit"){
                $item->prestasi = $item->prestasi/max($sort_Prestasi_Pengalaman);
            }elseif ($sifat_Prestasi_Pengalaman == "cost"){
                $item->prestasi = min($sort_Prestasi_Pengalaman)/$item->prestasi;
            }if ($sifat_Essay == "benefit"){
                $item->essay = $item->essay/max($sort_Essay);
            }elseif ($sifat_Essay == "cost"){
                $item->essay = min($sort_Essay)/$item->essay;
            }if ($sifat_IPK == "benefit"){
                $item->ipk = $item->ipk/max($sort_IPK);
            }elseif ($sifat_IPK == "cost"){
                $item->ipk = min($sort_IPK)/$item->ipk;
            }if ($sifat_Gaji == "benefit"){
                $item->gaji = $item->gaji/max($sort_Gaji);
            }elseif ($sifat_Gaji == "cost"){
                $item->gaji = min($sort_Gaji)/$item->gaji;
            }

        }



        dd($datacalon);
//        dd($datakriteria);
//        dd($databenefit);
//        dd($datamahasiswa);
//        dd($sort_Dokumen);


//        return view("admin.saw_system.normalisasi", compact("databenefit", "akun"));
    }
}
