<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productes', function (Blueprint $table) {
          
            $table->id();
            $table->string('name',30);
            $table->string('descriotion',200);
            $table->integer('price');
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
        Schema::dropIfExists('productes');
    }
}
