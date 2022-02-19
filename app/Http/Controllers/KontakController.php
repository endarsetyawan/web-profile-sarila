<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function index()
    {
        $table = Kontak::all();
        return view('kontak',[
            'kontak' => $table
        ]);
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);
        $data = array(
            'nama' => $request->nama,
            'hp' => $request->hp,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan
        );
        $table = Kontak::all();
        Mail::to($request->email)->send(new SendMail($data));
        return back()->with('success', 'Terimakasih atas masukannya!');
    }
}
