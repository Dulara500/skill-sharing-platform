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
        Schema::create('stu_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Student_id');
            $table->unsignedBigInteger('Teacher_id');
            $table->string('course_title');
            $table->string('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stu_reviews');
    }
};
