<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsaccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vendorsaccount', function(Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_id');
            $table->dateTime('transaction_date');
            $table->string('particulars');
            $table->float('amount_debited', 8, 2);
            $table->float('amount_credited', 8, 2);
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
        Schema::dropIfExists('vendorsaccount');
    }
}
