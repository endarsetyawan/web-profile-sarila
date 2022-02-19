<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarIcu extends Model
{
    protected $fillable = ['nama_bangsal','jumlah'];
    protected $table = 'tb_kamar_icu';
}
