<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paczkas', function(Blueprint $table) {
            $table->id();
            $table->float('waga');
            $table->float('szerokosc');
            $table->float('dlugosc');
            $table->float('wysokosc');
            $table->string('adres_dostawy');
            $table->string('odbiorca');
            $table->string('users_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paczkas');
    }
};
