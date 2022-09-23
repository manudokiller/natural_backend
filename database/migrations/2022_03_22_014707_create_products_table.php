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
      Schema::create('product_types', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->timestamps();
      });

      Schema::create('products', function (Blueprint $table) {
          $table->id();
          $table->string('name_spanish');
          $table->string('name_scientific');
          $table->string('name_english');
          $table->string('family_scientific');
          $table->text('description');
          $table->text('enhance');
          $table->foreignId('product_type_id')->constrained();
          $table->timestamps();
      });

      Schema::create('icon_product', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->foreignId('icon_id')->constrained();
          $table->foreignId('product_id')->constrained();
          $table->timestamps();
      });

      Schema::create('image_product', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->foreignId('image_id')->constrained();
          $table->foreignId('product_id')->constrained();
          $table->timestamps();
      });

      Schema::create('disease_product', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->foreignId('disease_id')->constrained();
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
      Schema::dropIfExists('disease_product');
      Schema::dropIfExists('imae_product');
      Schema::dropIfExists('icon_product');
      Schema::dropIfExists('products');
      Schema::dropIfExists('product_types');
    }
};
