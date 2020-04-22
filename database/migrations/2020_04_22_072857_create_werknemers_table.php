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
            $table->increments("werknemer_id");
            $table->string("werknemer_vnaam");
            $table->string("werknemer_anaam");
            $table->string("werknemer_plaats");
            $table->string("werknemer_postcode");
            $table->string("werknemer_hnummer");
            $table->string("werknemer_straat");
            $table->string("werknemer_telnummer");
            $table->string("werknemer_functie");
            $table->integer("bedrijf_id")->unsigned();
            $table->foreign("bedrijf_id")->references("bedrijf_id")->on("bedrijfs");
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
