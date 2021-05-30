<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonPenerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_penerima', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("id_periode")->unsigned();
            $table->foreign("id_periode")->references("id")->on("periode_penerimaan")->onDelete("cascade")->onUpdate("cascade");
            $table->string("nama");
            $table->string("nim");
            $table->string("c1");
            $table->string("c2");
            $table->string("c3");
            $table->string("c4");
            $table->enum("status", ["Lolos", "Tidak Lolos", "Sedang diproses"])->default("Sedang diproses");
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
        Schema::dropIfExists('calon_penerima');
    }
}
