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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('preview_image');
            $table->string('background_image');
            $table->string('background_color');
            $table->string('video_link');
            $table->string('preview_video_link');
            $table->integer('rating');
            $table->integer('scores_count');
            $table->string('director');
            $table->string('starring');
            $table->integer('run_time');
            $table->string('genre');
            $table->integer('released');
            $table->boolean('is_favorite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
