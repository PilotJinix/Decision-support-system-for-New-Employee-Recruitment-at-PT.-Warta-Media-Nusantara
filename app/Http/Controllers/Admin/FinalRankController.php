<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinalRankController extends Controller
{
    public function view_final_rank(Request $request){
        $session = $request->session()->get("username");

        if ($session == null){
            return redirect(route('index'));
        }
        $akun = DB::table('users')->where('username', $session)->first();


        $object = new RankingController();

        $data = $object->ranking();

        //Colections besar to kecil
        $datacalon = $data->sortByDesc("jumlah");

        //Colections kecil to Besar
        $datacalon1 = $data->sortBy("jumlah");


//        $data = collect($datacalon)->sortBy("jumlah", "DESC");

//        dd($data);

        return view("admin.saw_system.final_rank", compact("datacalon", "akun"));

    }
}
