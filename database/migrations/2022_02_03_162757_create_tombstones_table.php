<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTombstonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('material_id');
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('depth')->nullable();
            $table->decimal('price', 10)->nullable()->default(0);
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
        Schema::dropIfExists('tombstones');
    }
}
