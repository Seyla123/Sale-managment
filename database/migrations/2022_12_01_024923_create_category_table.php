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
        Schema::create('category', function (Blueprint $table) {
            $table->unsignedBigInteger("CategoryID", true);
            $table->string("CategoryName" ,100);
            $table->string("Description",100);
            $table->string("CreatedBy",100);
            $table->string("UpdatedBy",100);
            $table->boolean('IsDeleted')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
