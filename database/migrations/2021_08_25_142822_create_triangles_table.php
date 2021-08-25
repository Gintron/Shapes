<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrianglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triangles', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('a');
            $table->integer('b');
            $table->integer('c');
            $table->float('surface');
            $table->float('circumference');
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
        Schema::dropIfExists('triangles');
    }
}
