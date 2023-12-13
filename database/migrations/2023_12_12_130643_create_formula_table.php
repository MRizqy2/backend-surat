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
        Schema::create('formula', function (Blueprint $table) {
            // $table->id();
            $table->string('kd_barang')->primary();
            // $table->string('kd_barang')->unique();
            $table->string('nama_barang');
            $table->string('kd_material');
            $table->float('qty');
            $table->string('satuan');
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
        Schema::dropIfExists('formula');
    }
};
