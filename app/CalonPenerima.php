<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonPenerima extends Model
{
    protected $table = "calon_penerima";

    protected $fillable =[
        "id_periode", "nama", "nim", "c1", "c2", "c3", "c4", "status"
    ];

    public function periode(){
        return $this->belongsTo("App\PeriodePenerimaan");
    }

}
