<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('route_post_media', function (Blueprint $table) {
            $table->id();

            $table->tinyText('photo_or_video_url');

            $table->unsignedBigInteger('route_id');
            $table->foreign('route_id')->references('id')->on('routes');

            $table->unsignedBigInteger('route_post_id');
            $table->foreign('route_post_id')->references('id')->on('route_posts');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_post_media');
    }
};
