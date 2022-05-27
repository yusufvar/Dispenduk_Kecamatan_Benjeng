<?php

namespace App\Http\Controllers;

use App\Models\tgl_merah;
use Illuminate\Http\Request;

class TanggalMerahCotroller extends Controller
{
    function index(){

        $tgl_merah = tgl_merah::all();
        return view('admin.tanggalMerah',compact('tgl_merah'));
    }
    function form(){
        return view('admin.formTanggalMerah');
    }
    function save(Request $request){
        $cre = $request->validate([
            'nama_tanggal'=>'required',
            'tanggal'=>'required',
        ]);

        tgl_merah::create($cre);

        return redirect()->route('tanggal_merah');
    }

    function edit($id){
        $tgl_merah = tgl_merah::find($id);
        return view('admin.formTanggalMerah',compact('tgl_merah'));
    }
    function update(Request $request,$id){
        $cre = $request->validate([
            'nama_tanggal'=>'required',
            'tanggal'=>'required',
        ]);
        $tgl_merah = tgl_merah::find($id);
        $tgl_merah->fill($cre);
        $tgl_merah->save();
        return redirect()->route('tanggal_merah');

    }
    function delete($id){
        $tgl_merah = tgl_merah::find($id);
        $tgl_merah->delete();
        return redirect()->route('tanggal_merah');
    }
}
