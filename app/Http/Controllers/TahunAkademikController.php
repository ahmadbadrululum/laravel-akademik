<?php

namespace App\Http\Controllers;

use App\TahunAkademik;
use Illuminate\Http\Request;
use DataTables;

class TahunAkademikController extends Controller{
    public function json(){
        return DataTables::of(TahunAkademik::all())
            ->addColumn('action', function ($row){
                $action  = '<a href="/tahunAkademik/'.$row->id.'/edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> edit</a>';
                $action .= \Form::open(['url' => '/tahunAkademik/'.$row->id, 'method' => 'delete', 'style'=>'float:right']);
                $action .= '<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</button>';
                $action .= \Form::close();
                return $action;
            })
            ->addColumn('status', function ($row){
                return  $row->status == 'y' ? 'Aktif' : 'Tidak Aktif' ;
            })
            ->make(true);
    }
    
    
    public function index(){
        return view('tahunAkademik.index');
    }
    
    
    public function create(){
        $data['page'] = 'add';
        return view('tahunAkademik.add', $data);
    }
    
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'kode_tahun_akademik' => 'required|unique:tahun_akademiks|min:4',
            'tahun_akademik' => 'required',
            'status' => 'required',
        ]);
        $tahunAkademik = new TahunAkademik();
        $tahunAkademik->create($request->all());
        return redirect('/tahunAkademik')->with('success', 'Data saved success!');
    }
    
    
    public function show($id){}

    public function edit($id){
        $data = [
            'page' => 'edit',
            'tahunAkademik' => TahunAkademik::where('id', $id)->first()
        ];
        return view('tahunAkademik.edit', $data);
    }
    
    
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'tahun_akademik' => 'required',
        ]);
        $tahunAkademik = TahunAkademik::where('id', $id);
        $tahunAkademik->update($request->except('_method','_token'));
        return redirect('/tahunAkademik')->with('success', 'Data edit success!');
    }
    
    
    public function destroy($id){
        $tahunAkademik = TahunAkademik::where('id', $id);
        $tahunAkademik->delete();
        return redirect('/tahunAkademik')->with('success', 'Delete data success!');
    }
}
