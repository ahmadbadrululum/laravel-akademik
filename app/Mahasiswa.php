<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Mahasiswa extends Model{
    protected $table = 'mahasiswas';
    protected $fillable = ['nim', 'nama_mahasiswa', 'jurusan_id_mahasiswa', 'email', 'no_telephone','alamat', 'password'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] =  Hash::make($value);
    }
}
