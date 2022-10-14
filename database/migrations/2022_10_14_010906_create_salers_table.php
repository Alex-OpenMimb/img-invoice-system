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
        Schema::create('salers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nit');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nit');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('name');
            $table->float('price');
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
        Schema::dropIfExists('salers');
        Schema::dropIfExists('buyers');
        Schema::dropIfExists('products');
    }
};
