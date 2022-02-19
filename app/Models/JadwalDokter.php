<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    protected $fillable = ['id_spesialis','id_dokter','hari','waktu','jam'];
    protected $table = 'tb_jadwal_dokter';
}
