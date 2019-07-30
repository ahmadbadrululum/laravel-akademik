<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Matakuliah;
use App\Dosen;
use App\Ruangan;
use App\JamKuliah;
use App\Semester;
use App\TahunAkademik;
use App\JadwalKuliah;

class JadwalKuliahController extends Controller{

    public function index(){
        $data = [
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
            'semester' => Semester::pluck('semester', 'id'),
        ];
        return view('jadwalKuliah.index', $data);
    }

    public function create(){
        $data = [
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
            'matakuliah' => matakuliah::pluck('nama_mk', 'id'),
            'dosen' => Dosen::pluck('nama', 'id'),
            'ruangan' => Ruangan::pluck('nama_ruangan', 'id'),
            'jamKuliah' => JamKuliah::pluck('jam_kuliah', 'id'),
            'semester' => Semester::pluck('semester', 'id'),
            'hariKuliah' => ['senin'=>'senin', 'selasa'=>'selasa'],
            'tahunAkademik' => \DB::table('tahun_akademiks')->where('status','y')->first(),
        ];
        return view('jadwalKuliah.add', $data);
    }

    public function store(Request $request){
        // var_dump($request->all());
        // die;
        $jadwalKuliah = new JadwalKuliah();
        $jadwalKuliah->create($request->all());
        return redirect('/jadwalkuliah')->with('success', 'Data saved success!');
    }
    
}
