<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model{
    protected $table = 'tahun_akademiks';
    protected $fillable = ['kode_tahun_akademik', 'tahun_akademik', 'status'];


    // function getStatusValue($value){
    //     return 'Test-y'.$value;
    // }

}
