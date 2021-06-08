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
            $table->bigInteger("id_user")->unsigned();
            $table->foreign("id_user")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->string("dokumen")->nullable();
            $table->string("prestasi");
            $table->string("essay")->nullable();
            $table->string("gaji");
            $table->string("data");
            $table->enum("status", ["Lolos", "Tidak Lolos", "Sedang diproses", "Verivikasi"])->default("Sedang diproses");
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
