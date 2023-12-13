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
        Schema::create('form_planning', function (Blueprint $table) {
            $table->string('dokumen_fpp')->primary();
            // $table->foreignId('dokumen_frp')->constrained('dokumen_frp');
            $table->string('kd_barang');
            // $table->string('kd_barang')->unique();
            $table->string('nama_barang');
            $table->string('qty_request');
            $table->string('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_planning');
    }
};
