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
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->foreignId('id_jb');
            $table->foreignId('id_pic');
            $table->string('barcode')->unique();
            $table->string('barang');

            $table->string('harga');
            $table->string('jumlah')->nullable();
            $table->string('quantity');
            $table->integer('sisa')->nullable();

            $table->string('tersedia')->nullable();
            $table->string('terpinjam')->nullable();
            // $table->string('jenis_barang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
