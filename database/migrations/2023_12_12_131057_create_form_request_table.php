<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('form_request', function (Blueprint $table) {
            // $table->string('dokumen_frp')->primary();
            $table->string('dokumen_frp');
            $table->foreign('dokumen_frp')->references('dokumen_frp')->on('header_request');
            $table->string('kd_barang');
            $table->string('nama_barang');
            $table->string('qty_request');
            $table->string('unit');
            $table->timestamp('tgl_request')->nullable();
            $table->timestamp('tgl_selesai')->nullable();
            $table->string('dibuat_oleh');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('form_request');
    }
};
