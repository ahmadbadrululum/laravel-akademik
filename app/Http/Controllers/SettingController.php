<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller{
    public function index(){
        $data['setting'] = Setting::find(1);
        return view('setting.index', $data);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nama_universitas' => 'required',
            'email' => 'required',
            'no_telephone' => 'required',
            'alamat' => 'required',
        ]);
        $setting = Setting::where('id', $id);
        $setting->update($request->except('_method','_token'));
        return redirect('/setting')->with('success', 'Data edit success!');
    }
}
