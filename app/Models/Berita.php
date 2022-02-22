<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['id_kategori','judul','isi','date','gambar'];
    protected $table = 'tb_berita';
}
