<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeexpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('officeexpenses', function(Blueprint $table) {
            $table->increments('id');
            $table->float('salary', 8, 2);
            $table->float('electricity_bill', 8, 2);
            $table->float('misc_expenses', 8, 2);
            $table->float('house_rent', 8, 2);
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
        //
        Schema::dropIfExists('officeexpenses');
    }
}
