<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('header_request', function (Blueprint $table) {
            // $table->id();
            $table->string('dokumen_frp')->primary();
            // $table->string('dokumen_frp');
            // $table->foreign('dokumen_frp')->references('dokumen_frp')->on('form_request');
            $table->timestamp('tgl_request')->nullable();
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('header_request');
    }
};
