<?php

namespace App\Http\Controllers;

use App\Ruangan;
use Illuminate\Http\Request;
use DataTables;

class RuanganController extends Controller{
    public function json(){
        return DataTables::of(Ruangan::all())
            ->addColumn('action', function ($row){
            $action  = '<a href="/ruangan/'.$row->id.'/edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> edit</a>';
            $action .= \Form::open(['url' => '/ruangan/'.$row->id, 'method' => 'delete', 'style'=>'float:right']);
            $action .= '<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button>';
            $action .= \Form::close();
            return $action;
            })
            ->make(true);
    }
    
    
    public function index(){
        return view('ruangan.index');
    }
    
    
    public function create(){
        $data['page'] = 'add';
        return view('ruangan.add', $data);
    }
    
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'kode_ruangan' => 'required|unique:ruangans|min:4',
            'nama_ruangan' => 'required',
        ]);
        $ruangan = new ruangan();
        $ruangan->create($request->all());
        return redirect('/ruangan')->with('success', 'Data saved success!');
    }
    
    
    public function show($id){}

    public function edit($id){
        $data = [
            'page' => 'edit',
            'ruangan' => Ruangan::where('id', $id)->first()
        ];
        return view('ruangan.edit', $data);
    }
    
    
    public function update(Request $request, $id){
        $validatedData = $request->validate([
                        'nama_ruangan' => 'required',
        ]);
        $ruangan = Ruangan::where('id', $id);
        $ruangan->update($request->except('_method','_token'));
        return redirect('/ruangan')->with('success', 'Data edit success!');
    }
    
    
    public function destroy($id){
        $ruangan = Ruangan::where('id', $id);
        $ruangan->delete();
        return redirect('/ruangan')->with('success', 'Delete data success!');
    }
}
