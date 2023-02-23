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
            $table->id('Product_Id');          
            $table->string('Category_Id');
            $table->string('SKU');
            $table->string('Name'); 
            $table->string('Publishing_Company_Id');
            $table->string('Author');
            $table->string('Price');
            $table->string('Quantity');
            $table->string('Description');
            $table->string('Date');
            $table->string('Avatar');
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
