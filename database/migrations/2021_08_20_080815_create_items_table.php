<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->dateTime('lost_date', $precision = 0)->nullable();
            $table->dateTime('find_date', $precision = 0)->nullable();
            $table->unsignedSmallInteger('item_type_id');
            $table->string('model')->nullable();
            $table->string('tag')->nullable();
            $table->string('color')->nullable();
            $table->json('images');
            $table->text('description');
            $table->text('location_id')->nullable();
            $table->text('specific_location')->nullable();
            $table->tinyText('province_id');
            $table->smallInteger('regency_id');
            $table->mediumInteger('district_id')->nullable();
            $table->bigInteger('village_id')->nullable();
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
        Schema::dropIfExists('items');
    }
}
