<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarBidan extends Model
{
    protected $fillable = ['nama_bangsal','jumlah'];
    protected $table = 'tb_kamar_bidan';
}
