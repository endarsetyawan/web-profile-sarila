<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\KamarAnak;
use App\Models\KamarIcu;
use App\Models\KamarDewasa;
use App\Models\KamarBidan;
use App\Models\KamarPerinatologi;
class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        $kamaranak = KamarAnak::all();
        $kamaricu = KamarIcu::all();
        $kamardewasa = KamarDewasa::all();
        $kamarbidan = KamarBidan::all();
        $kamarperinatologi = KamarPerinatologi::all();
        return view('kamar',[
            'kamar' => $kamar,
            'kamaranak' => $kamaranak,
            'kamaricu' => $kamaricu,
            'kamardewasa' => $kamardewasa,
            'kamarbidan' => $kamarbidan,
            'kamarperinatologi' => $kamarperinatologi
        ]);
    }
}
