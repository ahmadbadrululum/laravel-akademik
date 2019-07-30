<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Fakultas;
use App\Jurusan;
use DataTables;


class MahasiswaController extends Controller{
    public function json(){
        $mahasiswa = \DB::table('mahasiswas')
            ->join('jurusans', 'jurusans.id', '=', 'mahasiswas.jurusan_id_mahasiswa')
            ->join('fakultas', 'fakultas.id', '=', 'jurusans.fakultas_id_jurusan')
            ->select('mahasiswas.*','jurusans.nama_jurusan', 'fakultas.nama_fakultas')
            ->get();

        return DataTables::of($mahasiswa)
            ->addColumn('action', function ($row){
            $action  = '<a href="/mahasiswa/'.$row->id.'/edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> edit</a>';
            $action .= \Form::open(['url' => '/mahasiswa/'.$row->id, 'method' => 'delete', 'style'=>'float:right']);
            $action .= '<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button>';
            $action .= \Form::close();
            return $action;
            })
            ->make(true);
    }
    
    public function index(){
        return view('mahasiswa.index');
    }
    
    
    public function create(){
        $data['page'] = 'add';
        $data = [
            'page' => 'add',
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id')
        ];
        return view('mahasiswa.add', $data);
    }
    
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'nim' => 'required|unique:mahasiswas|min:7',
            'email' => 'required|unique:mahasiswas',
            'nama_mahasiswa' => 'required',
            'no_telephone' => 'required',
            'jurusan_id_mahasiswa' => 'required',
            'password' => 'required|min:5',
        ]);
        $mahasiswa = new Mahasiswa();
        $mahasiswa->create($request->all());
        return redirect('/mahasiswa')->with('success', 'Data saved success!');
    }
    
    
    public function show($id){}
    
    public function edit($id){
        $data = [
            'page' => 'edit',
            'jurusan' => Jurusan::pluck('nama_jurusan', 'id'),
            'mahasiswa' => Mahasiswa::where('id', $id)->first()
        ];
        return view('mahasiswa.edit', $data);
    }
    
    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::where('id', $id)->first();
        $mahasiswa->nama_mahasiswa =  $request->nama_mahasiswa;
        $mahasiswa->jurusan_id_mahasiswa =  $request->jurusan_id_mahasiswa;
        $mahasiswa->email =  $request->email;
        $mahasiswa->no_telephone =  $request->no_telephone;
        $mahasiswa->alamat =  $request->alamat;
        if (!empty($request->password)) {
            $mahasiswa->password =  $request->password;
        }
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('success', 'Data edit success!');
    }   
    
    public function destroy($id){
        $mahasiswa = Mahasiswa::where('id', $id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Delete data success!');
    }
}
