<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
       "booking_code",
       "pay_code",
       "nama_pemesan",
       "jumlah_bayar",
       "status",
    ]; 
}
