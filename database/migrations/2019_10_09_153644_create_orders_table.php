<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->default(0);
            $table->string('phone')->default(0);
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedInteger('numbers')->default(1);
            $table->string('price')->default(0);
            $table->unsignedInteger('order_status_id')->default(1);
            $table->string('type');
            $table->string('tracking_code')->nullable();
            $table->text('description')->nullable();
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
