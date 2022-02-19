<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class BeritaDetailController extends Controller
{
    public function index($id)
    {
        $table = Berita::select(
                "tb_berita.*",
                "tb_kategori_berita.nama_kategori"
            )
                ->leftJoin("tb_kategori_berita", "tb_kategori_berita.id", "=", "tb_berita.id_kategori")
                ->where("tb_berita.id", "=",$id)
                ->get();
        return view('beritadetail',[
            'berita' => $table
        ]);
    }
}
