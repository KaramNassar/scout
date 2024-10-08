<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique()->index();
            $table->string('slug', 155)->nullable()->unique();
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1000)->index();
            $table->string('slug')->nullable()->unique();
            $table->longText('body');
            $table->enum('status', ['published', 'draft', 'pending'])->default('draft');
            $table->dateTime('published_at')->nullable();
            $table->dateTime('scheduled_for')->nullable();
            $table->string('featured_image_id')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->foreignId('admin_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('troop_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->index()->unique();
            $table->string('slug', 155)->nullable()->unique();
            $table->timestamps();
        });

        Schema::create(
            'post_tag',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId("post_id")
                    ->constrained(table: 'posts')
                    ->cascadeOnDelete();
                $table->foreignId("tag_id")
                    ->constrained(table: 'tags')
                    ->cascadeOnDelete();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('tags');
    }
};
