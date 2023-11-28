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
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger("ProductID",true);
            $table->string('ProductName',100);
            $table->unsignedBigInteger('CategoryID');
            $table->foreign('CategoryID')->references('CategoryID')->on('category')->onDelete('cascade');
            $table->string('Barcode',100);
            $table->datetime('Expiredate');
            $table->integer('Qty',false);
            $table->decimal('UnitPriceIn', 11,2);
            $table->decimal('UnitPriceOut', 11,2);
            $table->string('ProductImage',100)->default("default.png");
            $table->boolean('IsDeleted')->default(0);
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
};
