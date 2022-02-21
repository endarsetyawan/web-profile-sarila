<?php

namespace App\Http\Controllers;
use App\Models\JadwalDokter;
use App\Models\Spesialis;
use App\Models\DataDokter;
use Illuminate\Http\Request;
use Session;

class DokterJadwalController extends Controller
{
    public function index()
    {
        $kmrank = JadwalDokter::select(
            "*",
            "tb_jadwal_dokter.id as id"
        )
            ->leftJoin("tb_spesialis", "tb_spesialis.id", "=", "tb_jadwal_dokter.id_spesialis")
            ->leftJoin("tb_data_dokter", "tb_data_dokter.id", "=", "tb_jadwal_dokter.id_dokter")
            ->orderBy('tb_jadwal_dokter.id_spesialis', 'DESC')
            ->orderBy('id_dokter', 'ASC')
            ->get();
        return view('admin.dokter_jadwal.index', [
            'dokter_jadwal' => $kmrank
        ]);
    }
    public function create()
    {
        //$kmrank1 = JadwalDokter::all();
        $kmrank2 = Spesialis::all();
        $kmrank3 = DataDokter::all();
        return view('admin.dokter_jadwal.create', [
            'spesialis' => $kmrank2,
            'datadokter' => $kmrank3

        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_spesialis' => 'required',
            'id_dokter' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'jam' => 'required'
        ]);
        
        //dd($request->id_spesialis);
        $array = $request->only([
            'id_spesialis', 'id_dokter', 'hari', 'waktu', 'jam'
        ]);
        $table = JadwalDokter::create($array);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('dokter_jadwal.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = JadwalDokter::find($id);
        $kmrank2 = Spesialis::all();
        $kmrank3 = DataDokter::all();
        if (!$kmrank) return redirect()->route('dokter_jadwal.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan');
        return view('admin.dokter_jadwal.edit', [
            'dokterjadwal' => $kmrank,
            'spesialis' => $kmrank2,
            'datadokter' => $kmrank3
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_spesialis' => 'required',
            'id_dokter' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'jam' => 'required'
        ]);
        $table = JadwalDokter::findOrFail($id);
        $table->id_spesialis = $request->id_spesialis;
        $table->id_dokter = $request->id_dokter;
        $table->hari = $request->hari;
        $table->waktu = $request->waktu;
        $table->jam = $request->jam;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('dokter_jadwal.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = JadwalDokter::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('dokter_jadwal.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = JadwalDokter::find($id);
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('dokter_jadwal.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
