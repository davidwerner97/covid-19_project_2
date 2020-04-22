<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedrijfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedrijf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('plaats');
            $table->string('postcode');
            $table->string('hnummer');
            $table->string('straat');
            $table->string('telnummer');
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
        Schema::dropIfExists('bedrijf');
    }
}
