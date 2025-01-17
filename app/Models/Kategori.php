<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'tbl_kategori'; // Nama tabel di database

    protected $fillable = [
        'kategori', 'Aktif', 'created_at', 'updated_at'
    ]; // Kolom yang dapat diisi menggunakan mass assignment
}
