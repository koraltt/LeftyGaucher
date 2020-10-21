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
            $table->timestamps();
            $table->string('titleFr', 100);
            $table->string('titleEng', 100);
            $table->string('descriptionFr', 255);
            $table->string('descriptionEng', 255);
            $table->string('brand', 50);
            $table->integer('quantity');
            $table->float('regularPrice', 8, 2);
            $table->float('discountPrice', 8, 2);
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');        
            $table->string('categoryFr', 100);
            $table->string('categoryEn', 100);
            $table->string('imgUrl', 100);
            $table->string('imgUrl2', 100);
            $table->boolean('deleted');

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
