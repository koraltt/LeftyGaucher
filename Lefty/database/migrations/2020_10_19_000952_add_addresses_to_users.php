<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('shipping_address_id')->unsigned()->nullable();
            $table->foreign('shipping_address_id')->references('id')->on('addresses');  
            $table->bigInteger('billing_address_id')->unsigned()->nullable();
            $table->foreign('billing_address_id')->references('id')->on('addresses');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
