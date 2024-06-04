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
        Schema::create('informasi_koutas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_id')->constrained();
            $table->date('tanggal_kunjungan');
            $table->integer('sisa_kouta');
            // $table->string('tujuan_kunjungan');
            $table->string('warna_tulisan');
            $table->string('warna_latar_belakang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_koutas');
    }
};
