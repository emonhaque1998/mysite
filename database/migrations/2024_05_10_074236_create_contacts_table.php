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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->json("why_chosse_me");
            $table->string("address");
            $table->string("email");
            $table->string("number");
            $table->string("facebook");
            $table->string("twiter");
            $table->string("linkdin");
            $table->string("instragram");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
