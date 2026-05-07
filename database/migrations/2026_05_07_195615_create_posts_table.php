<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // reform | facturation | tutorial
            $table->text('excerpt');
            $table->longText('content');
            $table->string('featured_image')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->unsignedTinyInteger('reading_time')->default(3);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->index(['published_at', 'category']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
