<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_name',50);
            $table->string('p_code',50);
            $table->string('p_desc',50);
            $table->string('p_category',50);
            $table->string('p_price',50);
            $table->string('p_quantity',50);
            $table->string('p_stock_date',50);
            $table->string('p_rating',50);
            $table->string('p_purchased',50);
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
        Schema::dropIfExists('products');
    }
}
