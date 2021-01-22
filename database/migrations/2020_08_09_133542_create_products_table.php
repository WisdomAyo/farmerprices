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
            $table->bigIncrements('id');
            $table->longText('name')->nullable();
            $table->longText('url')->nullable();
            $table->longText('price')->nullable();
            $table->bigInteger('category_id')->index()->nullable();
            $table->bigInteger('shop_id')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('viewed')->nullable();
            $table->dateTime('exp_date')->nullable();
            $table->longText('weight',255)->nullable();
            $table->longText('discount',255)->nullable();
            $table->longText('out_of_stock',255)->nullable();
            $table->bigInteger('status')->nullable();
            $table->longText('long_desc')->nullable();
            $table->longText('short_desc')->nullable();
            $table->longText('special')->nullable();
            $table->longText('tags_id')->nullable();
            $table->longText('tags_name')->nullable();
            $table->longText('verified_status')->nullable();
            $table->longText('pieces')->nullable();
            $table->longText('price_range',200)->nullable();
            $table->softDeletes();
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
