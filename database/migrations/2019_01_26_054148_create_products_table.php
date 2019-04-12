<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price' ,8, 2);
            $table->longText('noidung');
            $table->string('publication_date');
            $table->string('id_category');
            $table->integer('quantity');
            $table->string('id_publishing');
            $table->string('id_author');
            $table->string('image');
            $table->string('bookdemo');
            $table->string('bookfull');
            $table->string('id_status')->default('2');
            $table->string('id_user');
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
