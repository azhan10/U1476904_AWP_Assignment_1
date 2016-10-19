<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrsFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('films', function (Blueprint $table) {

            $table->increments('id');

            $table->string('filmtitle');

            $table->text('filmdescription');
            $table->text('filmdirector');
            $table->text('filmrating');
            $table->text('filmstarname');

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
        Schema::drop("films");
    }
}
