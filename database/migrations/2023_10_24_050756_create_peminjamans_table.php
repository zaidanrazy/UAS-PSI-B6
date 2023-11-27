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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang');
            $table->foreignId('id_user');
            $table->foreignId('id_pic');
            $table->string('qty_barang');
            $table->string('image')->nullable();
            $table->string('image_new')->nullable();
            $table->string('sisa_barang');
            $table->string('mark');
            $table->dateTime('tgl_pinjam')->nullable();
            $table->dateTime('tgl_kembali')->nullable();
            $table->string('tgl_kembali_real')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
