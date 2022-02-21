<?php

namespace App\Http\Controllers;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Session;
class SpesialisController extends Controller
{
    public function index()
    {
        $kmrank = Spesialis::all();
        return view('admin.spesialis.index', [
            'spesialis' => $kmrank
        ]);
    }
    public function create()
    {
        return view('admin.spesialis.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_spesialis' => 'required'
        ]);
        $array = $request->only([
            'nama_spesialis'
        ]);
        $table = Spesialis::create($array);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('spesialis.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = Spesialis::find($id);
        if (!$kmrank) return redirect()->route('spesialis.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan');
        return view('admin.spesialis.edit', [
            'spesialis' => $kmrank
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_spesialis' => 'required'
        ]);
        $table = Spesialis::findOrFail($id);
        $table->nama_spesialis = $request->nama_spesialis;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('spesialis.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = Spesialis::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('spesialis.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = Spesialis::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('spesialis.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
