<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('name', 100)->nullable()->index();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('stella_id')->nullable();
            $table->unsignedBigInteger('parterre_id')->nullable();
            $table->unsignedBigInteger('tombstone_id')->nullable();
            $table->unsignedBigInteger('pedestal_id')->nullable();
            $table->decimal('price', 10)->nullable()->default(0);
            $table->unsignedBigInteger('pillar_id')->nullable();
            $table->timestamps();
            $table->json('images')->nullable();
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
