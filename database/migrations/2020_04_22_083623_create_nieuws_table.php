<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNieuwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nieuws', function (Blueprint $table) {
            $table->id('id');
            $table->string('titel');
            $table->string('inhoud');
            $table->date('datum');
            $table->integer("bedrijf_id")->unsigned();
            $table->foreign("bedrijf_id")->references("id")->on("bedrijf");
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
        Schema::dropIfExists('nieuws');
    }
}
