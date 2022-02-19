<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class BeritaKategoriController extends Controller
{
    public function index($id)
    {
        $table = Berita::select(
                "tb_berita.*",
                "tb_kategori_berita.nama_kategori"
            )
                ->leftJoin("tb_kategori_berita", "tb_kategori_berita.id", "=", "tb_berita.id_kategori")
                ->where("tb_kategori_berita.id", "=",$id)
                ->orderby('date','desc')
                ->get();
        $table3 = KategoriBerita::findOrFail($id);
        if ($table3) {
            $nama = $table3->nama_kategori;
        } else {
            $nama = "Terbaru";
        }
        $table2 = KategoriBerita::All();
        return view('berita',[
            'berita' => $table,
            'nama_kategori' => $nama,
            'kategori' => $table2
        ]);
    }
}
