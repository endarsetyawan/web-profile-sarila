<?php

namespace App\Http\Controllers;
use App\Models\Kamar;
use App\Models\JadwalDokter;
use App\Models\DataDokter;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        $dokter = JadwalDokter::select(
            "tb_jadwal_dokter.id_spesialis", 
            "tb_jadwal_dokter.id_dokter", 
            "tb_jadwal_dokter.hari", 
            "tb_jadwal_dokter.waktu",
            "tb_jadwal_dokter.jam", 
            "tb_spesialis.nama_spesialis",
            "tb_data_dokter.nama_dokter"
        )
            ->leftJoin("tb_spesialis", "tb_spesialis.id", "=", "tb_jadwal_dokter.id_spesialis")
            ->leftJoin("tb_data_dokter", "tb_data_dokter.id", "=", "tb_jadwal_dokter.id_dokter")
            ->orderBy('nama_dokter', 'DESC')
            ->limit(5)
            ->get();
        $dokterprofil = DataDokter::select(
                "tb_data_dokter.*"
            )
                ->leftJoin("tb_spesialis", "tb_spesialis.id", "=", "tb_data_dokter.id_spesialis")
                ->limit(3)
                ->get();
        return view('main',[
            'kamar' => $kamar,
            'dokterprofil' => $dokterprofil,
            'jadwaldokter' => $dokter
        ]);
    }
}
