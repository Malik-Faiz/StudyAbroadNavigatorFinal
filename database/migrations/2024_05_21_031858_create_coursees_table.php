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
        Schema::create('coursees', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_duration');
            $table->string('pace');
            $table->string('link')->nullable();
            $table->string('tuition_fee');
            $table->string('study_type');
            $table->text('description');
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coursees');
    }
};
