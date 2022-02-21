<?php

namespace App\Http\Controllers;
use App\Models\DataDokter;
use Illuminate\Http\Request;

class DependentDropdownController extends Controller
{
    public function store(Request $request)
    {
        $cities = DataDokter::where('id_spesialis', $request->get('id'))
            ->pluck('nama_dokter', 'id');
    
        return response()->json($cities);
    }
}
