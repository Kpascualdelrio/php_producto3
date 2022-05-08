<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percentage', function (Blueprint $table) {
            
            $table->bigIncrements('id_percentage');
            $table->bigInteger('id_course')->unsigned();
            $table->bigInteger('id_class')->unsigned();
            $table->bigInteger('continuous_assessment');
            $table->bigInteger('exams');
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
        Schema::dropIfExists('percentatges');
    }
};
