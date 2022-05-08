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
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('id_class');

            $table->bigInteger('id_teacher')->unsigned(); 
            // $table->foreign('id_teacher')->references('id_teacher')->on('teachers');

            $table->bigInteger('id_course')->unsigned();
            // $table->foreign('id_course')->references('id')->on('courses');

            $table->bigInteger('id_schedule')->unsigned();
            // $table->foreign('id_schedule')->references('id')->on('schedules');
            $table->String('name');
            $table->String('color');
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
        Schema::dropIfExists('class');
    }
};
