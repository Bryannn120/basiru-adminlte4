<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_umkm');
            $table->string('nama_produk');
            $table->string('jenis_produk');
            $table->decimal('harga_produk', 10, 2);
            $table->text('deskripsi')->nullable();
            $table->string('tipe_produk');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_umkm')->references('id')->on('umkms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

