<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JadwalKuliahController extends Controller{

    public function index(){

        $data = [
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
        ];
        return view('jadwalKuliah.index', $data);
    }

}
