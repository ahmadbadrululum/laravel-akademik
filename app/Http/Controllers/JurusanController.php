<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Jurusan;
use App\Fakultas;

class JurusanController extends Controller{
    
    public function json(){
        $fakultas = \DB::table('jurusans')
            ->join('fakultas', 'fakultas.id', '=', 'jurusans.fakultas_id_jurusan')
            ->select('jurusans.*', 'fakultas.nama_fakultas')
            ->get();
        return DataTables::of($fakultas)
            ->addColumn('action', function ($row){
            $action  = '<a href="/jurusan/'.$row->id.'/edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> edit</a>';
            $action .= \Form::open(['url' => '/jurusan/'.$row->id, 'method' => 'delete', 'style'=>'float:right']);
            $action .= '<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button>';
            $action .= \Form::close();
            return $action;
            })
            ->make(true);
    }
    
    public function index(){
        return view('jurusan.index');
    }
    
    
    public function create(){
        $data['page'] = 'add';
        $data = [
            'page' => 'add',
            'fakultas' => Fakultas::pluck('nama_fakultas', 'id')
        ];
        return view('jurusan.add', $data);
    }
    
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'kode_jurusan' => 'required|unique:jurusans|min:3',
            'nama_jurusan' => 'required',
            'fakultas_id_jurusan' => 'required',
            'jenjang' => 'required',
        ]);
        $jurusan = new Jurusan();
        $jurusan->create($request->all());
        return redirect('/jurusan')->with('success', 'Data saved success!');
    }
    
    
    public function show($id){}
    
    public function edit($id){
        $data = [
            'page' => 'edit',
            'fakultas' => Fakultas::pluck('nama_fakultas', 'id'),
            'jurusan' => Jurusan::where('id', $id)->first()
            // 'fakultas' => Fakultas::pluck('nama_fakultas', 'id')
        ];
        return view('jurusan.edit', $data);
    }
    
    
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nama_jurusan' => 'required',
            'fakultas_id_jurusan' => 'required',
            'jenjang' => 'required',
        ]);
        $jurusan = Jurusan::where('id', $id);
        $jurusan->update($request->except('_method','_token'));
        return redirect('/jurusan')->with('success', 'Data edit success!');
    }
    
    
    public function destroy($id){
        $jurusan = Jurusan::where('id', $id);
        $jurusan->delete();
        return redirect('/jurusan')->with('success', 'Delete data success!');
    }
    
}
