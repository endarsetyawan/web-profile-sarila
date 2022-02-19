<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $table = Berita::select(
                "tb_berita.*",
                "tb_kategori_berita.nama_kategori"
            )
                ->leftJoin("tb_kategori_berita", "tb_kategori_berita.id", "=", "tb_berita.id_kategori")
                ->orderby('date','desc')
                ->get();
        $table2 = KategoriBerita::All();
        return view('berita',[
            'berita' => $table,
            'nama_kategori' => "Terbaru",
            'kategori' => $table2
        ]);
    }
}
