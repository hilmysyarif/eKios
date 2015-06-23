<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_values', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('option_id');
            $table->string('value', 25);
            $table->enum('active', ['1', '0'])->default('1');;
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
        Schema::drop('option_values');
    }
}
