<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $fillable = ['nama_kategori'];
    protected $table = 'tb_kategori_berita';
}
