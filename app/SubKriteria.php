<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    protected $table = "sub_kriteria";

    protected $fillable = [
        "id_periode",
        "Kisaran",
        "nilai"
    ];
}
