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
        Schema::create('adres', function(Blueprint $table) {
            $table->id();
            $table->string('wojewodztwo');
            $table->string('powiat');
            $table->string('kod_pocztowy');
            $table->string('ulica');
            $table->string('numer_lokalu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adres');
    }
};
