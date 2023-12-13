<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_request', function (Blueprint $table) {
            // $table->id();
            $table->string('dokumen_frp');
            $table->foreign('dokumen_frp')->references('dokumen_frp')->on('header_request');
            $table->string('kd_barang');
            $table->string('nama_barang');
            $table->string('qty_request');
            $table->string('unit');
            $table->timestamp('tgl_selesai')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_request');
    }
};
