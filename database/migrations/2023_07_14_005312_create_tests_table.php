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
            $table->string('stazione_di_partenza') -> nullable();
            $table->string('stazione_di_arrivo') -> nullable();
            $table->time('orario_di_partenza') -> nullable();
            $table->time('orario_di_arrivo') -> nullable();
            $table->string('codice_treno') -> unique();
            $table->integer('numero_carrozze') -> nullable();
            $table->boolean('in_time') -> default(true);
            $table->boolean('deleted') -> default(false);



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
