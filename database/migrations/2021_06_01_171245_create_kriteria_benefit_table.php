<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaBenefitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_benefit', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("id_periode")->unsigned();
            $table->foreign("id_periode")->references("id")->on("periode_penerimaan")->onDelete("cascade")->onUpdate("cascade");
            $table->string("nama_kriteria");
            $table->enum("sifat_kriteria", ["max", "min"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kriteria_benefit');
    }
}
