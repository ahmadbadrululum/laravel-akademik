<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model{
    protected $table = "dosens";
    protected $fillable = ['nidn', 'nama', 'no_hp', 'email']; 
}
