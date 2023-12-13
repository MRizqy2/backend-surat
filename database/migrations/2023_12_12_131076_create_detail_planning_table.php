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
        Schema::create('detail_planning', function (Blueprint $table) {
            $table->string('dokumen_fpp');
            $table->foreign('dokumen_fpp')->references('dokumen_fpp')->on('header_planning');
            $table->string('kd_barang');
            // $table->foreignId('kd_barang')->constrained('formula');
            $table->float('qty_barang');
            $table->string('kd_material');
            $table->float('qty_formula');
            $table->float('qty_terima');
            $table->bigInteger('harga_beli');
            $table->bigInteger('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_planning');
    }
};
