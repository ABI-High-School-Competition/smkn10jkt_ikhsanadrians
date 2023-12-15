<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    use HasFactory;

    protected $fillable = [
       "awal_id",
       "tujuan_id",
       "harga",
       "no_wa",
       "nomor_kursi",
       "nama_pemesan",
       "nama_penumpang",
       "tgl_berangkat",
       "perjalanan_fixed",
       "jumlah_penumpang"
    ];

    public function tujuan(){
        return $this->belongsTo(Tujuan::class);
    }
}
