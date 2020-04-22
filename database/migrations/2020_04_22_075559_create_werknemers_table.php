<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWerknemersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('werknemers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("vnaam");
            $table->string("anaam");
            $table->string("plaats");
            $table->string("postcode");
            $table->string("hnummer");
            $table->string("straat");
            $table->string("telnummer");
            $table->string("functie");
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
        Schema::dropIfExists('werknemers');
    }
}
