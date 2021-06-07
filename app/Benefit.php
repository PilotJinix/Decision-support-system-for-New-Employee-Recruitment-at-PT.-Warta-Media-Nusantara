<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = "kriteria_benefit";

    protected $fillable =[
        "id_periode",
        "nama_kriteria",
        "bobot_kriteria",
        "sifat_kriteria"
    ];
}
