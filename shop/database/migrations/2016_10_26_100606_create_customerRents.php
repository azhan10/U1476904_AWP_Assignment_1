<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerRents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('customerRents', function (Blueprint $table) {

            $table->increments('id');

            $table->string('filmtitle');

            $table->text('duration');
            $table->text('film_id');
            $table->text('customer_name');
            $table->text('customer_Address');
            $table->text('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop("customerRents");
    }
}
