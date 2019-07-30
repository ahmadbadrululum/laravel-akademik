<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model{
    protected $table = 'jadwal_kuliahs';
    protected $fillable = ['jurusan_id_jadwalKuliah', 'tahunAkademik_id_jadwalKuliah', 'matakuliah_id_jadwalKuliah','semester_id_jadwalKuliah','dosen_id_jadwalKuliah','ruangan_id_jadwalKuliah','hariKuliah_jadwalKuliah','jamKuliah_id_jadwalKuliah'];
}
