<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model{
    protected $table = 'kurikulums';
    protected $fillable = ['jurusan_id_kurikulum', 'matakuliah_id_kurikulum', 'semester'];
}
