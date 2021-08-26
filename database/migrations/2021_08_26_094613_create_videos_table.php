<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('videos', function (Blueprint $table) {
    		$table->id();
    		$table->string('playlist_id', 100);
    		$table->string('video_id', 100);
    		$table->string('title');
    		$table->string('seo_title');
    		$table->text('description');
    		// $table->boolean('is_active')->unsigned()->default(false);
            $table->smallInteger('approved_by')->nullable();
    		$table->string('mq_thumbnail');
    		$table->string('hq_thumbnail');
    		$table->string('meta_keywords');
    		$table->dateTime('tgl_upload', $precision = 0);
    		$table->mediumInteger('duration');
    		$table->integer('click');
    		$table->smallInteger('created_by');
    		$table->smallInteger('updated_by')->nullable();
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
    	Schema::dropIfExists('videos');
    }
}
