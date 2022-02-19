<?php

namespace App\Http\Controllers;
use App\Models\Kamarutama;
use Illuminate\Http\Request;
use Session;
class KamarUtamaController extends Controller
{
    public function index()
    {
        $kmrank = Kamarutama::all();
        return view('admin.kamar_utama.index', [
            'kamar_utama' => $kmrank
        ]);
    }
    public function create()
    {
        return view('admin.kamar_utama.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_bangsal' => 'required',
            'jumlah' => 'required'
        ]);
        $array = $request->only([
            'nama_bangsal', 'jumlah'
        ]);
        $table = Kamarutama::create($array);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('kamar_utama.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = Kamarutama::find($id);
        if (!$kmrank) return redirect()->route('kamar_utama.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan');
        return view('admin.kamar_utama.edit', [
            'kamar_utama' => $kmrank
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bangsal' => 'required',
            'jumlah' => 'required'
        ]);
        $table = Kamarutama::findOrFail($id);
        $table->nama_bangsal = $request->nama_bangsal;
        $table->jumlah = $request->jumlah;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('kamar_utama.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = Kamarutama::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kamar_utama.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = Kamarutama::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kamar_utama.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
