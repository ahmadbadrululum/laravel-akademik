<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model{
    protected $table = 'mahasiswas';
    protected $fillable = ['nim', 'nama_mahasiswa', 'jurusan_id_mahasiswa', 'email', 'no_telephone','alamat', 'password'];
}
