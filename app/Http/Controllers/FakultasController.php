<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Fakultas;


class FakultasController extends Controller{

    public function json(){
        return DataTables::of(Fakultas::all())
            ->addColumn('action', function ($row){
            $action  = '<a href="/fakultas/'.$row->id.'/edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> edit</a>';
            $action .= \Form::open(['url' => '/fakultas/'.$row->id, 'method' => 'delete', 'style'=>'float:right']);
            $action .= '<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button>';
            $action .= \Form::close();
            return $action;
            })
            ->make(true);
    }

    public function index(){
        return view('fakultas.index');
    }
    
    
    public function create(){
        $data['page'] = 'add';
        return view('fakultas.add', $data);
    }
    
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'kode_fakultas' => 'required|unique:fakultas|min:3',
            'kode_fakultas' => 'required',
        ]);
        $fakultas = new Fakultas();
        $fakultas->create($request->all());
        return redirect('/fakultas')->with('success', 'Data saved success!');
    }
    
    
    public function show($id){}
    
    
    public function edit($id){
        $data = [
            'page' => 'edit',
            'fakultas' => Fakultas::where('id', $id)->first()
        ];
        return view('fakultas.edit', $data);
    }
    
    
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'kode_fakultas' => 'required',
        ]);
        $fakultas = Fakultas::where('id', $id);
        $fakultas->update($request->except('_method','_token'));
        return redirect('/fakultas')->with('success', 'Data edit success!');
    }
    
    
    public function destroy($id){
        $fakultas = Fakultas::where('id', $id);
        $fakultas->delete();
        return redirect('/fakultas')->with('success', 'Delete data success!');
    }
}

