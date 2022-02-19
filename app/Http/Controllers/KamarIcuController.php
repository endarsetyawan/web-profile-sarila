<?php

namespace App\Http\Controllers;
use App\Models\KamarIcu;
use Illuminate\Http\Request;
use Session;
class KamarIcuController extends Controller
{
    public function index()
    {
        $kmrank = KamarIcu::all();
        return view('admin.kamar_icu.index', [
            'kamar_icu' => $kmrank
        ]);
    }
    public function create()
    {
        return view('admin.kamar_icu.create');
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
        $table = KamarIcu::create($array);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('kamar_icu.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = KamarIcu::find($id);
        if (!$kmrank) return redirect()->route('kamar_icu.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan');
        return view('admin.kamar_icu.edit', [
            'kamar_icu' => $kmrank
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bangsal' => 'required',
            'jumlah' => 'required'
        ]);
        $table = KamarIcu::findOrFail($id);
        $table->nama_bangsal = $request->nama_bangsal;
        $table->jumlah = $request->jumlah;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('kamar_icu.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = KamarIcu::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kamar_icu.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = KamarIcu::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('kamar_icu.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
