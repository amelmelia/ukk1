<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignid('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignid('siswas_id')->constrained('siswas')->onDelete('cascade');
            $table->foreignid('spps_id')->constrained('spps')->onDelete('cascade');
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar',8);
            $table->string('tahun_dibayar',4);
            $table->integer('jumlah_dibayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}
