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
        Schema::create('wishlistuniversities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Add the user_id column
            $table->unsignedBigInteger('university_id'); // Add the scholarship_id column
            $table->foreign('user_id')->references('id')->on('registers')->onDelete('cascade');
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlistuniversities');
    }
};
