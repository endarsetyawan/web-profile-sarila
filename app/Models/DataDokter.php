<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDokter extends Model
{
    protected $fillable = ['nama_dokter','alamat','id_spesialis','foto'];
    protected $table = 'tb_data_dokter';
}
