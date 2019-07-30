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

    public function index(Request $request){
        $joinData = \DB::table('jadwal_kuliahs')
                    ->join('jam_kuliahs', 'jam_kuliahs.id', '=', 'jadwal_kuliahs.jamKuliah_id_jadwalKuliah')
                    ->join('matakuliahs', 'matakuliahs.id', '=', 'jadwal_kuliahs.matakuliah_id_jadwalKuliah')
                    ->join('dosens', 'dosens.id', '=', 'jadwal_kuliahs.dosen_id_jadwalKuliah')
                    ->join('ruangans', 'ruangans.id', '=', 'jadwal_kuliahs.ruangan_id_jadwalKuliah')
                    ->select('jadwal_kuliahs.*', 'jam_kuliahs.jam_kuliah', 'matakuliahs.nama_mk', 'dosens.nama', 'ruangans.nama_ruangan')
                    ->where('jadwal_kuliahs.jurusan_id_jadwalKuliah', $request->get('jurusan'))
                    ->where('jadwal_kuliahs.semester_id_jadwalKuliah', $request->get('semester'))
                    ->get();
        // return $joinData;
        // die;
        $data = [
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
            'semester' => Semester::pluck('semester', 'id'),
            'jadwalKuliah' => $joinData,
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
