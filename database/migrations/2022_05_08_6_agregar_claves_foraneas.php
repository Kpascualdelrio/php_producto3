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
        Schema::table('schedules', function (Blueprint $table) {
           
            $table->foreign('id_class')->references('id_class')->on('class');
          
        });

        Schema::table('class', function (Blueprint $table) {

            $table->foreign('id_teacher')->references('id_teacher')->on('teachers');
         
            $table->foreign('id_course')->references('id')->on('courses');
            
            $table->foreign('id_schedule')->references('id_schedule')->on('schedules');
               
        });

        Schema::table('enrollments', function (Blueprint $table) {

            $table->foreign('id_student')->references('id')->on('users');
         
            $table->foreign('id_course')->references('id')->on('courses');
       
        });

        Schema::table('works', function (Blueprint $table) {

            $table->foreign('id_student')->references('id')->on('users');
         
            $table->foreign('id_class')->references('id_class')->on('class');
       
        });

        Schema::table('percentage', function (Blueprint $table) {

            $table->foreign('id_course')->references('id')->on('courses');

            $table->foreign('id_class')->references('id_class')->on('class');
           
        });

        Schema::table('notifications', function (Blueprint $table) {

            $table->foreign('id_student')->references('id')->on('users');

            $table->foreign('id_work')->references('id')->on('works');
            
            $table->foreign('id_exam')->references('id_exam')->on('exams');
           
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
