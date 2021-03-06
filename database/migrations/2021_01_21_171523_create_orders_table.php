<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->integer('order_id');
            $table->string('phone');
            $table->float('price', 10, 2);
            $table->float('order_charge', 10, 2);
            $table->float('price_summary', 10, 2);
            $table->string('delivery_time')->nullable();
            $table->string('payment');
            $table->string('address');
            $table->string('name');
            $table->integer('user_id');
            $table->string('order_status');
            $table->string('restaurant_name');

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
        Schema::dropIfExists('orders');
    }
}
