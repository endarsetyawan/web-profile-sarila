<?php

namespace App\Http\Controllers;
use App\Models\Datadokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Session;

class DokterDataController extends Controller
{
    public function index()
    {
        $kmrank = DataDokter::select(
            "tb_data_dokter.*",
            "tb_spesialis.nama_spesialis"
        )
            ->leftJoin("tb_spesialis", "tb_spesialis.id", "=", "tb_data_dokter.id_spesialis")
            ->get();
        return view('admin.dokter_data.index', [
            'dokter_data' => $kmrank
        ]);
    }
    public function create()
    {
        $kmrank1 = Spesialis::all();
        return view('admin.dokter_data.create', [
            'spesialis' => $kmrank1
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
        $namafile = "dokter".$ymdhis.".".$ext;
        $tujuan_upload = public_path() .'/images';
        $file->move($tujuan_upload,$namafile);
        //$array = $request->only([
        //    'nama_dokter', 'alamat', 'id_spesialis'
        //]);
        //array_push($array,$namafile);
        //$table = DataDokter::create($array);
        DataDokter::create([
            'nama_dokter' => $request->nama_dokter,
            'alamat' => $request->alamat,
            'id_spesialis' => $request->id_spesialis,
            'foto' => $namafile
        ]);
        Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect()->route('dokter_data.index')
            ->with('success_message', 'Berhasil menambah Barang baru');
    }
    public function edit($id)
    {
        $kmrank = DataDokter::find($id);
        $kmrank1 = Spesialis::all();
        if (!$kmrank) return redirect()->route('dokter_data.index')
            ->with('error_message', 'Kamar Anak dengan id'.$id.' tidak ditemukan'); 
        return view('admin.dokter_data.edit', [
            'dokter_data' => $kmrank,
            'spesialis' => $kmrank1
        ]);
    }
    public function update(Request $request, $id)
    {
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $ymdhis = date("ymdhis");
        $yyy = date("Y-m-d h:i:s");
        $namafile = "dokter".$ymdhis.".".$ext;
        $tujuan_upload = public_path() .'/images';
        $file->move($tujuan_upload,$namafile);


        $table = DataDokter::findOrFail($id);
        $unlink = public_path() .'/images'."/".$table->foto;
        //dd($unlink);
        unlink("$unlink");

        $table->nama_dokter = $request->nama_dokter;
        $table->alamat = $request->alamat;
        $table->id_spesialis = $request->id_spesialis;
        $table->foto = $namafile;
        $table->update();
        Session::flash('sukses','Data Berhasil Diubah');
        return redirect()->route('dokter_data.index')
            ->with('success_message', 'Berhasil mengubah Barang');
    }

    public function destroy(Request $request, $id)
    {
        $table = DataDokter::find($id);
        $unlink = public_path() .'/images'."/".$table->foto;
        //dd($unlink);
        unlink("$unlink");
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('dokter_data.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
    public function show(Request $request, $id)
    {
        $table = DataDokter::find($id);
        $unlink = public_path() .'/images'."/".$table->foto;
        //dd($unlink);
        unlink("$unlink");
        if ($table) $table->delete();
        Session::flash('sukses','Data Berhasil Dihapus');
        return redirect()->route('dokter_data.index')
            ->with('success_message', 'Berhasil menghapus Barang');
            
    }
}
