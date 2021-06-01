<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = "kriteria_benefit";

    protected $fillable =[
        "nama_kriteria",
        "sifat_kriteria"
    ];
}
