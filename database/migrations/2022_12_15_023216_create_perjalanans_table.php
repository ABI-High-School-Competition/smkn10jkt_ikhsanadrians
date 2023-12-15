<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perjalanans', function (Blueprint $table) {
            $table->id(); 
            $table->string('awal_id');
            $table->string('tujuan_id');
            $table->string('nama_pemesan')->nullable();
            $table->string('nama_penumpang')->nullable();
            $table->string('no_wa')->nullable();
            $table->double('harga')->nullable();
            $table->date('tgl_berangkat');
            $table->string('nomor_kursi')->nullable();
            $table->string('perjalanan_fixed')->nullable();
            $table->integer('jumlah_penumpang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perjalanans');
    }
};
