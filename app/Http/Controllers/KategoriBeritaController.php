<?php

namespace App\Http\Controllers;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Session;
class KategoriBeritaController extends Controller
{
    public function index()
    {
        $kmrank = KategoriBerita::all();
        return view('admin.kategori_berita.index', [
            'kategori_berita' => $kmrank
        ]);
    }
    public function create()
    {
        return view('admin.kategori_berita.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);
        $array = $request->only([
            'nama_kategori'
        ]);
        $table = KategoriBerita::create($array);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('kategori_berita.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = KategoriBerita::find($id);
        if (!$kmrank) return redirect()->route('kategori_berita.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan');
        return view('admin.kategori_berita.edit', [
            'kategori_berita' => $kmrank
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);
        $table = KategoriBerita::findOrFail($id);
        $table->nama_kategori = $request->nama_kategori;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('kategori_berita.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = KategoriBerita::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kategori_berita.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = KategoriBerita::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kategori_berita.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
