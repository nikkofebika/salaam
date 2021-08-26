<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_playlists', function (Blueprint $table) {
            $table->id();
            $table->string('playlist_id', 100);
            $table->string('title');
            $table->string('seo_title');
            $table->smallInteger('priority');
            $table->text('description');
            $table->string('meta_keywords');
            // $table->boolean('is_active')->unsigned()->default(false);
            $table->smallInteger('approved_by')->nullable();
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
        Schema::dropIfExists('video_playlists');
    }
}
