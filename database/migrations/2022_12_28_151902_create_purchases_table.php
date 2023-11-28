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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id('PurchaseID',true);
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('SupplierID');
            $table->unsignedBigInteger('ProductID');
            $table->integer('PurchaseQty', false);
            $table->decimal('TotalPrice', 11,2);
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('SupplierID')->references('SupplierID')->on('Supplier')->onDelete('cascade');
            $table->foreign('ProductID')->references('ProductID')->on('Products')->onDelete('cascade');
            
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
        Schema::dropIfExists('purchases');
    }
};
