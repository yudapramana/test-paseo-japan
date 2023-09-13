<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarKeberatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_keberatan', function (Blueprint $table) {
            $table->increments('id_keberatan');
			$table->timestamps();
			$table->softDeletes();

            $table->string('nomor_keberatan')->nullable();
            $table->string('nomor_permohonan');
            $table->text('alasan_keberatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_keberatan');
    }
}
