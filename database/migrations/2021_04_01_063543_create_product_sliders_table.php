<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sliders', function (Blueprint $table) {
            $table->id();
            $table->longText('photo');
            $table->foreignId('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('NO ACTION');
            $table->enum('status',['active','inactive']);
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
        Schema::dropIfExists('product_sliders');
    }
}
