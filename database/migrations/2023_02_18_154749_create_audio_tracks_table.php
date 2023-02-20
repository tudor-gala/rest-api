<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('audio_tracks', function (Blueprint $table) {
            $table->id();
            $table->string('artist');
            $table->string('title');
            $table->unsignedSmallInteger('release_year');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audio_tracks');
    }
};
