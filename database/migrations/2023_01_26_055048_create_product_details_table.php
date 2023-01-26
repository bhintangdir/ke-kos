<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('name');
            $table->decimal('size', 9, 3);
            $table->decimal('price', 9, 3);
            $table->integer('total');
            $table->integer('unit_in_stock');
            $table->integer('unit_in_order');
            #Address
            $table->string('province');
            $table->string('district');
            $table->string('subdistrict');
            $table->string('detail');
            $table->string('postal_code');
            #EndAdress
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
        Schema::dropIfExists('product_details');
    }
};
