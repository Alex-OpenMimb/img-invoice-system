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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->unsignedBigInteger('saler_id');
            $table->foreign('saler_id')->references('id')->on('salers');

            $table->unsignedBigInteger('buyer_id');
            $table->foreign('buyer_id')->references('id')->on('buyers');

            $table->date('date_item');
            $table->time('hour_item', $precision = 0);
            $table->float('total');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('sale_products', function (Blueprint $table) {
            $table->id();
       
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('amount');
            $table->float('total');

            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items');


            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->date('date_invoice');
            $table->time('hour_invoice', $precision = 0);
            $table->float('before_iva');
            $table->float('iva');
            $table->float('total');

            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items');


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
        Schema::dropIfExists('sale_products');
    }
};
