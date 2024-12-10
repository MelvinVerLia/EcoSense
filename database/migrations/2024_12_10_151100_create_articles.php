<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID field
            $table->string('title');  // Title of the article
            $table->text('content');  // Content of the article
            $table->string('author');  // Author name
            $table->string('image')->nullable();  // Image path, nullable for cases when no image is uploaded
            $table->timestamps();  // Created and updated timestamps
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};