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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();

            $table->string('azienda') -> unique();
            $table->string('stazione di partenza') -> nullable();
            $table->string('stazione di arrivo') -> nullable();
            $table->time('orario di partenza') -> nullable();
            $table->time('orario di arrivo') -> nullable();
            $table->string('codice treno') -> unique();
            $table->string('Numero carrozze') -> nullable();
            $table->string('Numero carrozze') -> nullable();



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
        Schema::dropIfExists('tests');
    }
};
