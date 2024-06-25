<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_type'); // This could be 'umkm' or 'investor'
            $table->timestamp('tgl_transaksi');
            $table->string('tipe_transaksi');
            $table->decimal('jumlah', 10, 2); // Decimal with precision 10 and scale 2
            $table->string('status');
            $table->unsignedBigInteger('id_umkm')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('umkms')->onDelete('cascade');
            // Add foreign key constraint to id_umkm if it's related to another table
            // $table->foreign('id_umkm')->references('id')->on('umkms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

