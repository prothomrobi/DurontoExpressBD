<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('entry_date');
            $table->integer('vendor_id');
            $table->integer('product_id');
            $table->string('lot_no');
            $table->string('product_code');
            $table->string('stock_quantity_carton')->nullable();
            $table->string('stock_quantity_piece')->nullable();
            $table->float('stock_price_vendor', 8, 2);
            $table->float('stock_price_client', 8, 2);
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
        Schema::dropIfExists('stocks');
    }
}
