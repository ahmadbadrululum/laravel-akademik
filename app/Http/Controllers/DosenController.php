<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Dosen;


class DosenController extends Controller{

    public function json(){
        return DataTables::of(Dosen::all())
            ->addColumn('action', function ($row){
            $action  = '<a href="/dosen/'.$row->id.'/edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> edit</a>';
            $action .= \Form::open(['url' => '/dosen/'.$row->id, 'method' => 'delete', 'style'=>'float:right']);
            $action .= '<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button>';
            $action .= \Form::close();
            return $action;
            })
            ->make(true);
    }
    
    public function index(){
        return view('dosen.index');
    }
    
    
    public function create(){
        $data['page'] = 'add';
        return view('dosen.add', $data);
    }
    
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'nidn' => 'required|unique:dosens|min:3',
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
        $dosen = new Dosen();
        $dosen->create($request->all());
        return redirect('/dosen')->with('success', 'Data saved success!');
    }
    
    
    public function show($id){}
    
    
    public function edit($id){
        $data = [
            'page' => 'edit',
            'dosen' => Dosen::where('id', $id)->first()
        ];
        return view('dosen.edit', $data);
    }
    
    
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
        $dosen = Dosen::where('id', $id);
        $dosen->update($request->except('_method','_token'));
        return redirect('/dosen')->with('success', 'Data edit success!');
    }
    
    
    public function destroy($id){
        $dosen = Dosen::where('id', $id);
        $dosen->delete();
        return redirect('/dosen')->with('success', 'Delete data success!');
    }
}
