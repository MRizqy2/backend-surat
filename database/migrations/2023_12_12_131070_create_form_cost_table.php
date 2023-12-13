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
        Schema::create('form_cost', function (Blueprint $table) {
            $table->string('kd_material');
            $table->string('nama_material');
            $table->float('qty_minta');
            $table->bigInteger('harga_beli');
            $table->bigInteger('total_est_cost');
            $table->float('qty_terima');
            $table->bigInteger('total_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_cost');
    }
};
