<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('date_of_birth')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('experience')->nullable();
            $table->string('position')->nullable();
            $table->string('salary')->nullable();
            $table->text('about_me')->nullable();
            $table->string('cv_path');
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
        Schema::dropIfExists('careers');
    }
}
