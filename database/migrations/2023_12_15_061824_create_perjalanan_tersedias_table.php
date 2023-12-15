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
        Schema::create('perjalanan_tersedias', function (Blueprint $table) {
            $table->id();
            $table->string('nama_po');
            $table->string('awal');
            $table->double('harga');
            $table->string('tujuan');
            $table->date('tanggal_keberangkatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perjalanan_tersedias');
    }
};
