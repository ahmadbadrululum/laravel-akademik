<?php

namespace App\Http\Controllers;

use App\Kurikulum;
use App\Jurusan;
use App\Matakuliah;
use Illuminate\Http\Request;

class KurikulumController extends Controller{
    public function index(Request $request){
        $joinData = \DB::table('kurikulums')
                    ->join('matakuliahs', 'matakuliahs.id', '=', 'kurikulums.matakuliah_id_kurikulum')
                    ->join('jurusans', 'jurusans.id', '=', 'kurikulums.jurusan_id_kurikulum')
                    ->select('kurikulums.*','jurusans.nama_jurusan', 'matakuliahs.nama_mk','matakuliahs.kode_mk', 'matakuliahs.jml_sks')
                    ->where('jurusans.id', $request->get('jurusan'))
                    ->get();
        $data = [
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
            'jurusan_select' => $request->get('jurusan'),
            'kurikulum' => $joinData,
        ];
        return view('kurikulum.index', $data);
    }

    public function create(){
        $data['page'] = 'add';
        $data = [
            'page' => 'add',
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
            'matakuliah' => Matakuliah::pluck('nama_mk', 'id'),
        ];
        return view('kurikulum.add', $data);
    }
    
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'jurusan_id_kurikulum' => 'required',
            'matakuliah_id_kurikulum' => 'required',
            'semester' => 'required',
        ]);
        // var_dump($request->all());
        // die;

        $kurikulum = new Kurikulum();
        $kurikulum->create($request->all());
        return redirect('/kurikulum')->with('success', 'Data saved success!');
    }

    public function destroy($id){
        $kurikulum = Kurikulum::where('id', $id);
        $kurikulum->delete();
        return redirect('/kurikulum')->with('success', 'Delete data success!');
    }
    
}
