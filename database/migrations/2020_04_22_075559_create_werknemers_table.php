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
            $table->text("vnaam");
            $table->text("anaam");
            $table->text("plaats");
            $table->text("postcode");
            $table->text("hnummer");
            $table->text("straat");
            $table->text("telnummer");
            $table->text("functie");
            $table->integer("bedrijf_id")->unsigned();
            $table->foreign("bedrijf_id")->references("id")->on("bedrijven");
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
