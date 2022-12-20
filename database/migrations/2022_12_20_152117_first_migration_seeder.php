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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('from');
            $table->string('to');
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('code');
            $table->tinyInteger('cars')->unsigned()->nullable();
            $table->boolean('is_on_time')->default(1);
            $table->boolean('cancelled')->default(0);
            $table->timestamps();
            /* 
                Azienda -
                Stazione di partenza -
                Stazione di arrivo  -
                Orario di partenza -
                Orario di arrivo -
                Codice Treno - 
                Numero Carrozze -
                In orario -
                Cancellato -
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trains');
    }
};
