<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Matakuliah;
use DataTables;


class MatakuliahController extends Controller{

    public function json(){
        return DataTables::of(Matakuliah::all())->make(true);
    }

    public function index(){
        return view('matakuliah.index');
    }

    public function create(){
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *      * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
