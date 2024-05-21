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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->unsignedBigInteger("user_id")->index();
            $table->string("banner");
            $table->longText("description");
            $table->string("qutation_title");
            $table->json("images");
            $table->string("slug")->unique();
            $table->string("last_title");
            $table->text("last_description");
            $table->string("meta_title")->nullable();
            $table->text("meta_description")->nullable();
            $table->json("meta_keyword")->nullable();
            $table->string("meta_image")->nullable();
            $table->unsignedBigInteger("blog_category_id")->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
