<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaninosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caninos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sexo');
            $table->unsignedBigInteger('raca_id');
            $table->timestamps();

            $table->foreign('raca_id')->references('id')->on('racas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caninos');
    }
}
