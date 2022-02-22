<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Session;

class ArtikelController extends Controller
{
    public function index()
    {
        $kmrank = Berita::select(
            "tb_berita.*",
            "tb_kategori_berita.nama_kategori"
        )
            ->leftJoin("tb_kategori_berita", "tb_kategori_berita.id", "=", "tb_berita.id_kategori")
            ->get();
        return view('admin.artikel.index', [
            'artikel' => $kmrank
        ]);
    }
    public function create()
    {
        $kmrank1 = KategoriBerita::all();
        return view('admin.artikel.create', [
            'kategori' => $kmrank1
        ]);
    }
    public function store(Request $request)
    {
        //$request->validate([
        //    'nama_dokter' => 'required',
        //    'alamat' => 'required',
        //    'id_spesialis' => 'required',
        //    'file' => 'required'
        //]);
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $ymdhis = date("ymdhis");
        $yyy = date("Y-m-d h:i:s");
        $namafile = "berita".$ymdhis.".".$ext;
        $tujuan_upload = public_path() .'/images/berita';
        $file->move($tujuan_upload,$namafile);
        //$array = $request->only([
        //    'nama_dokter', 'alamat', 'id_spesialis'
        //]);
        //array_push($array,$namafile);
        //$table = Berita::create($array);
        Berita::create([
            'id_kategori' => $request->id_kategori,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'date' => $yyy,
            'gambar' => $namafile
        ]);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('artikel.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = Berita::find($id);
        $kmrank1 = KategoriBerita::all();
        if (!$kmrank) return redirect()->route('artikel.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan');
        return view('admin.artikel.edit', [
            'artikel' => $kmrank,
            'kategori' => $kmrank1
        ]);
    }
    public function update(Request $request, $id)
    {
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $ymdhis = date("ymdhis");
        $yyy = date("Y-m-d h:i:s");
        $namafile = "berita".$ymdhis.".".$ext;
        $tujuan_upload = public_path() .'/images/berita';
        $file->move($tujuan_upload,$namafile);


        $table = Berita::findOrFail($id);
        $unlink = public_path() .'/images/berita/'.$table->gambar;
        //dd($unlink);
        unlink("$unlink");
        $table->id_kategori = $request->id_kategori;
        $table->judul = $request->judul;
        $table->isi = $request->isi;
        $table->date = $yyy;
        $table->gambar = $namafile;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('artikel.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = Berita::find($id);
        $unlink = public_path() .'/images/berita/'.$table->gambar;
        //dd($unlink);
        unlink("$unlink");
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('artikel.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = Berita::find($id);
        $unlink = public_path() .'/images/berita/'.$table->gambar;
        //dd($unlink);
        unlink("$unlink");
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('artikel.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
