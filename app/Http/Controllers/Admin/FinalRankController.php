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

//        dd($data);

        $count = 0;
        foreach ($datacalon as $item){
            if ($count < 1){
                DB::table("calon_penerima")->where("id", $item->id)->update([
                    "status" => "Lolos",
                ]);
            }else{
                DB::table("calon_penerima")->where("id", $item->id)->update([
                    "status" => "Tidak Lolos",
                ]);
            }
            $count++;
        }

        return view("admin.saw_system.final_rank", compact("datacalon", "akun"));

    }

    public function editfinalstatus(Request $request, $id){

        $request->validate([
            "editstatus" => "required|string"
        ]);

        DB::table("calon_penerima")->where("id", $id)->update([
            "status" => $request->editstatus,
        ]);

        return redirect(route("tabel-final-ranking"));

    }
}
