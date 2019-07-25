<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Matakuliah;
use DataTables;


class MatakuliahController extends Controller{

    public function json(){
        return DataTables::of(Matakuliah::all())
        ->addColumn('action', function ($row){
            $action  = '<a href="/matakuliah/'.$row->id.'/edit" class="btn btn-warning">Edit</a>';
            $action .= \Form::open(['url' => '/matakuliah/'.$row->id, 'method' => 'delete', 'style'=>'float:right']);
            $action .= '<button type="submit" class="btn btn-danger">Hapus</button>';
            $action .= \Form::close();
            return $action;
            // return '<a href="/matakuliah/'.$row->id.'/edit" class="btn btn-warning">Edit</a>';
        })
        ->make(true);
    }
    
    public function index(){
        return view('matakuliah.index');
    }

    public function create(){
        return view('matakuliah.add');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'kode_mk' => 'required|unique:matakuliahs|min:4',
            'nama_mk' => 'required',
            'jml_sks' => 'required',
        ]);

        $matakuliah = new Matakuliah();
        $matakuliah->create($request->all());
        return redirect('/matakuliah');
    }


    public function show($id){}

    public function edit($id){
        $data['matakuliah'] = Matakuliah::where('id', $id)->first();
        return view('matakuliah.edit', $data);

    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'nama_mk' => 'required',
            'jml_sks' => 'required',
        ]);
        $matakuliah = Matakuliah::where('id', $id);
        $matakuliah->update($request->except('_method','_token'));
        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        // echo 'dsad';
        $matakuliah = Matakuliah::where('id', $id);
        $matakuliah->delete();
        return redirect('/matakuliah');
    }
}
