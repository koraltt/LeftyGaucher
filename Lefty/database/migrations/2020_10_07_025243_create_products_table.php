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
            $table->string('frenchShort', 100);
            $table->string('engShort', 100);
            $table->string('frenchLong', 255);
            $table->string('engLong', 255);
            $table->string('brand', 50);
            $table->float('price', 8, 2);
            $table->float('discountPrice', 8, 2);
            $table->string('categoryFr', 100);
            $table->string('categoryEn', 100);
            $table->string('imgName', 100);
            $table->string('imgName2', 100);
            
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
