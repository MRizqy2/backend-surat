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
        Schema::create('detail_cost', function (Blueprint $table) {
            $table->id();
            $table->foreign('documen_fpc')->on('header_cost');
            $table->string('kd_barang');
            $table->string('kd_material');
            $table->string('nama_material');
            $table->float('qty_minta')->unsigned();
            $table->foreign('harga_per_satuan')->references('harga_beli')->on('formula');
            $table->
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_cost');
    }
};
