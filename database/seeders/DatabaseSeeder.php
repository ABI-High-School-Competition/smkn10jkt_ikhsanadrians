<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PerjalananTersedia;
use Illuminate\Database\Seeder;
use App\Models\Tujuan;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Tujuan::create([
          "name" => "Bandung"
       ]);
       
       Tujuan::create([
        "name" => "Jakarta"
       ]);

       Tujuan::create([
          "name" => "Surabaya"
       ]);

       Tujuan::create([
        "name" => "Yogyakarta"
       ]);


       PerjalananTersedia::create([
            "nama_po" => "Sinar Jaya",
            "awal" => "Jakarta",
            "tujuan" => "Bandung",
            "harga" => 65000,
            "tanggal_keberangkatan" => Carbon::parse('2023-12-15')
       ]);

       PerjalananTersedia::create([
        "nama_po" => "Primajasa",
        "awal" => "Jakarta",
        "tujuan" => "Bandung",
        "harga" => 55000,
        "tanggal_keberangkatan" => Carbon::parse('2023-12-15')
   ]);

       PerjalananTersedia::create([
        "nama_po" => "Sinar Jaya",
        "awal" => "Bandung",
        "tujuan" => "Jakarta",
        "harga" => 65000,
        "tanggal_keberangkatan" => Carbon::parse('2023-12-15')
       ]);

   
    }
}
