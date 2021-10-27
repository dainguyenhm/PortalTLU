<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaculityMajors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculity_majors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('faculity_major_id')->unsigned()->nullable(true);
            $table->foreign('faculity_major_id')->references('id')->on('faculity_majors');
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
        Schema::dropIfExists('faculity_majors');
    }
}
