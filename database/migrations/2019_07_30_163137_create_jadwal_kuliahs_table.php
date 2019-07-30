<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jurusan_id_jadwalKuliah');
            $table->integer('matakuliah_id_jadwalKuliah');
            $table->integer('semester_id_jadwalKuliah');
            $table->integer('dosen_id_jadwalKuliah');
            $table->integer('ruangan_id_jadwalKuliah');
            $table->integer('jamKuliah_id_jadwalKuliah');
            $table->integer('tahunAkademik_id_jadwalKuliah');
            $table->string('hariKuliah_jadwalKuliah');
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
        Schema::dropIfExists('jadwal_kuliahs');
    }
}
