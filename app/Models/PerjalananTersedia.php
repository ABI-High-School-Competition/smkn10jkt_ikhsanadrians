<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerjalananTersedia extends Model
{
    use HasFactory; 

    protected $fillable = [
       "nama_po",
       "awal",
       "tujuan",
       "harga",
       "tanggal_keberangkatan"
    ];
}
