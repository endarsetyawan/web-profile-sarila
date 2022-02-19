<?php

namespace App\Http\Controllers;
use App\Models\KamarBidan;
use Illuminate\Http\Request;
use Session;
class KamarBidanController extends Controller
{
    public function index()
    {
        $kmrank = KamarBidan::all();
        return view('admin.kamar_bidan.index', [
            'kamar_bidan' => $kmrank
        ]);
    }
    public function create()
    {
        return view('admin.kamar_bidan.create');
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
        $table = KamarBidan::create($array);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('kamar_bidan.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = KamarBidan::find($id);
        if (!$kmrank) return redirect()->route('kamar_bidan.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan');
        return view('admin.kamar_bidan.edit', [
            'kamar_bidan' => $kmrank
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bangsal' => 'required',
            'jumlah' => 'required'
        ]);
        $table = KamarBidan::findOrFail($id);
        $table->nama_bangsal = $request->nama_bangsal;
        $table->jumlah = $request->jumlah;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('kamar_bidan.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = KamarBidan::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kamar_bidan.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = KamarBidan::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kamar_bidan.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
