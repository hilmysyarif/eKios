<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', '100');
            $table->string('slug', 150);
            $table->string('keywords');
            $table->string('sku', 20);
            $table->integer('vendor_id');
            $table->integer('supplier_id');
            $table->decimal('weight', 6, 2);
            $table->tinyInteger('weight_class_id');
            $table->string('dimension', 25);
            $table->tinyInteger('dimension_class_id');
            $table->enum('is_shipping', ['1', '0'])->default('1');
            $table->text('description');
            $table->text('meta_description');
            $table->integer('stock');
            $table->tinyInteger('stock_status_id');
            $table->date('date_available');
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
        Schema::drop('products');
    }
}
