<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('author');
            $table->string('description');
            $table->text('content');
            $table->string('url');
            $table->string('url_image');
            $table->dateTime('published_at');
            $table->string('category');
            $table->timestamps('timestamp');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
}