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
        Schema::create('supplier', function (Blueprint $table) {
            $table->unsignedBigInteger("SupplierID", true);
            $table->string('SupplierName', 100);
            $table->string('JobTitle', 100);
            $table->string('CompanyName', 100);
            $table->string('Phone', 100);
            $table->string('email',false)->unique();
            $table->string('Address', 100);
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
        Schema::dropIfExists('supplier');
    }
};
