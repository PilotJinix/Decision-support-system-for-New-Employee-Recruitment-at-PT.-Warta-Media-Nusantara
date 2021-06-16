<?php

namespace App\Http\Controllers\Mahasiswa;

use App\CalonPenerima;
use App\Http\Controllers\Controller;
use App\PeriodePenerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AjuanController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get("username");



        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();



//        $dataperiode= PeriodePenerimaan::doesnthave('penerima')
//            ->where("status", 0)
//            ->get();

//        $dataperiode = PeriodePenerimaan::w;

//        SomeModel::select(..)->whereNotIn('book_price', [100,200])->get();

        $dataperiode1 = CalonPenerima::select("id_periode")
            ->where("id_user", $akun->id)
            ->get();

        $isi = [];

        foreach ($dataperiode1 as $item){
//            $isi[]=$item;
            array_push($isi, $item->id_periode);
        }
//        return $isi;

        $dataperiode = PeriodePenerimaan::whereNotIn("id", $isi)
            ->get();

//        return $datacek;

//        dd($dataperiode);


        $datacalon = DB::table("calon_penerima")
            ->join("periode_penerimaan", "periode_penerimaan.id", "=", "calon_penerima.id_periode")
            ->where("periode_penerimaan.status", "=", 0)->where("calon_penerima.id_user", "=", $akun->id)
            ->select("periode_penerimaan.name","calon_penerima.*")->latest()->paginate(10);

        return view("mahasiswa.ajuan.ajuanbeasiswa", compact("datacalon", "akun", "dataperiode"));

    }

    public function calonPenerima(Request $request){
//        $session = $request->session()->get("username");

        $data = Auth::user()->id;

        $request->validate([
            "id_periode" => "required",
            "ipk" => "required|string",
            "gaji" => "required|string",
            'data' => 'required|file|mimes:zip,rar|max:4000',
        ]);

        $fileType = $request->file('data')->extension();
        $name = Str::random(8) . '.' . $fileType;
        Storage::putFileAs('public/file', $request->file('data'), $name);

        DB::table("calon_penerima")->insert([
            "id_periode"=> $request->id_periode,
            "id_user" => $data,
            "ipk" => $request->ipk,
            "gaji" => $request->gaji,
            "data" => $name
        ]);
        return redirect()->route('ajuan-beasiswaa')->with("saved", "Data Berhasil ditambahkan");
    }

}
