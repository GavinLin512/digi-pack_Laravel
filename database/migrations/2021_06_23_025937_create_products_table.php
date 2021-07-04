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
            $table->id();
            $table->string('product_name')->comment('產品名稱');
            $table->integer('product_category_id')->comment('產品種類ID');
            $table->integer('price')->comment('產品價格');
            $table->longText('discript')->comment('產品描述');
            $table->longText('product_img')->comment('產品圖片');
            $table->boolean('pin_to_top')->comment('是否置頂')->nullable();
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
