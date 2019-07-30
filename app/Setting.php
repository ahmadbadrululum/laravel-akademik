<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model{
    protected $table = 'settings';
    protected $fillable = ['nama_universitas', 'alamat', 'no_telephone', 'fax', 'email'];
}
