<?php

namespace App\Http\Controllers;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    public function index()
    {
        $table = JadwalDokter::select(
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
            ->orderBy('id_spesialis', 'DESC')
            ->orderBy('id_dokter', 'ASC')
            ->get();
        return view('jadwal', [
        'jadwaldokter' => $table
        ]);
    }
}
