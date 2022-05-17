<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('sistem_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('namaMitra');
            $table->string('email')->unique();
            $table->string('namaPerusahaan');
            $table->string('pekerjaan');
            $table->string('noSP2KPA');
            $table->date('haritanggalMulai');
            $table->date('haritanggalSelesai');
            $table->string('namaLokasi');
            $table->string('aktifitas');
            $table->string('lokasi');
            $table->string('taskList');
            $table->string('pengawasPekerjaan');
            $table->string('noHPPegawaiPekerjaan');
            $table->string('pengawasK3');
            $table->string('noHPPegawaiK3');
            $table->string('image');
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
        Schema::dropIfExists('sistem_pengajuans');
    }
}
