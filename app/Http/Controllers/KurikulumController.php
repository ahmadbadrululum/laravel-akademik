<?php

namespace App\Http\Controllers;

use App\Kurikulum;
use App\Jurusan;
use Illuminate\Http\Request;

class KurikulumController extends Controller{
    public function index(){
        $data = [
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
        ];
        return view('kurikulum.index', $data);
    }
}
