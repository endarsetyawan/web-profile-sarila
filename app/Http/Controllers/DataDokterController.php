<?php

namespace App\Http\Controllers;
use App\Models\DataDokter;
use Illuminate\Http\Request;

class DataDokterController extends Controller
{
    public function index()
    {
        $dokterprofil = DataDokter::select(
                "tb_data_dokter.*"
            )
                ->leftJoin("tb_spesialis", "tb_spesialis.id", "=", "tb_data_dokter.id_spesialis")
                ->get();
        return view('datadokter',[
            'dokterprofil' => $dokterprofil
        ]);
    }
}
