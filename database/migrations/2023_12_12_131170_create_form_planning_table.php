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
            $table->string('dokumen_frp');
            $table->foreign('dokumen_frp')->references('dokumen_frp')->on('header_request');
            $table->string('dokumen_fpp');
            $table->foreign('dokumen_fpp')->references('dokumen_fpp')->on('header_planning');
            // $table->foreignId('dokumen_frp')->constrained('dokumen_frp');
            $table->string('kd_barang');
            $table->bigInteger('qty_barang');
            $table->string('kd_material');
            $table->string('nama_material');
            $table->bigInteger('qty_minta');
            $table->bigInteger('harga_beli');
            $table->bigInteger('total');
            $table->float('qty_terima');
            $table->bigInteger('total_terima');
            $table->float('kurang');
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
