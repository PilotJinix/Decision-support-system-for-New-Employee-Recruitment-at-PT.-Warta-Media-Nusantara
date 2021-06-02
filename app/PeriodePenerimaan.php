<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodePenerimaan extends Model{

    protected $table = "periode_penerimaan";

    protected $fillable =[
        "nama",
        "kategori",
        "status"
    ];

    public function penerima(){
        return $this->hasMany("App\CalonPenerima");
    }
}
