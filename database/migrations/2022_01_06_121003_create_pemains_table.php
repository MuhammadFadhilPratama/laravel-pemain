<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posisi_id');
            $table->string('nama_pemain');
            $table->string('no_punggung')->unique();
            $table->string('asal_pemain');
            $table->string('ket_pemain');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('pemains');
    }
}
