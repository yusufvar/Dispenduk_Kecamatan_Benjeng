<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use App\Models\Bobot;
use App\Models\Guru;
use App\Models\Kriteria;
use App\Models\NilaiKriteriaGuru;
use App\Models\NilaiPegawai;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {

        $antrian = antrian::where('status','=','belum datang')->orderBy('nomor_antri','ASC')->first();



        return view('admin.dashboard',compact('antrian'));
    }
    function status($id,Request $request){
        $antrian = antrian::find($id);
        $antrian->status = $request->status;
        $antrian->save();

        return redirect()->route('dashboard');
    }

}
