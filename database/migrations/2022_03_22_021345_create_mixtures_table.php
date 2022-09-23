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
      Schema::create('mixture_types', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->timestamps();
      });

      Schema::create('mixtures', function (Blueprint $table) {
          $table->id();
          $table->text('procedures');
          $table->foreignId('disease_id')->constrained();
          $table->foreignId('product_id')->constrained();
          $table->foreignId('mixture_type_id')->constrained();
          $table->timestamps();
      });

      Schema::create('mixture_product', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->foreignId('mixture_id')->constrained();
          $table->foreignId('product_id')->constrained();
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
      Schema::dropIfExists('mixture_product');
      Schema::dropIfExists('mixtures');
      Schema::dropIfExists('mixture_types');
    }
};
