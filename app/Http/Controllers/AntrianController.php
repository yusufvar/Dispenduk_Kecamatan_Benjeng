<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    function getDatesFromRange($start, $end, $format = 'Y-m-d')
    {
        $array = array();
        $interval = new DateInterval('P1D');

        $realEnd = new DateTime($end);
        $realEnd->add($interval);

        $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

        foreach ($period as $date) {
            $array[] = $date->format($format);
        }

        return $array;
    }

    public function index()
    {


        $a = $this->getDatesFromRange(date('Y-m-d'), date('Y-m-d', strtotime('+10 day')));
        // dd($a);



        $full_date = antrian::select('tgl_datang', DB::raw('COUNT(*) total'))->groupBy('tgl_datang')->get();

        $keperluan = [
            "KTP",
            "Akta Kelahiran Permohonan Baru",
            "Akta Kelahiran Perubahan / Hilang atau Rusak",
            "Akta Kematian Permohonan Baru",
            "Akta Kematian Perubahan / Hilang atau Rusak",
            "Kartu Keluarga",
            "Surat Pindah Masuk",
            "Surat Pindah Keluar",
            "Pelaporan Kelahiran Luar Negeri",
            "SKTT (Surat Keterangan Tempat Tinggal) bagi WNA",
            "Kartu Keluarga bagi WNA",
            "KTP bagi WNA",
            "Perekaman KTP bagi Warga Luar Daerah",
            "KTP hilang bagi Warga Luar Daerah"
        ];

        // dd($keperluan);



        return view('index', ["keperluan" => $keperluan, 'tanggal_datang' => $a]);
    }

    public function save(Request $request)
    {

        $cre = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'no_hp' => 'required',
            'keperluan' => 'required',
            'desa' => 'required',
            'tgl_datang' => 'required',
        ]);

        $last_id = antrian::latest('id')->first();
        $kode =  str_pad('1', 5, '0');
        if ($last_id) {
            $kode = str_pad($last_id->id + 1, 5, '0');
        }
        $cre['nomor_antri'] = $kode;
        $cre['status'] = 'belum datang';

        antrian::create($cre);

        return view('nomer', ['nomer' => $kode]);
        // dd($request->all());
    }


    public function index2()
    {
        $antrian = antrian::all();

        return view('admin.antrian', compact('antrian'));
    }
}
