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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // teacher
            $table->string('title');
            $table->unsignedBigInteger('category_id')->nullable(); // or use string if you want

            $table->string('tags')->nullable(); // e.g. "math,algebra,high school"
            $table->text('overview')->nullable();

            $table->tinyInteger('years_experience')->nullable(); // 0 = no experience, 1 = 1–2 yrs, ...
            $table->boolean('is_certified_teacher')->default(false);

            $table->boolean('is_online')->default(false);
            $table->string('street_address')->nullable();
            $table->string('apt_suite')->nullable();
            $table->string('country', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('postal_code', 20)->nullable();

            $table->enum('from_day', ['mon','tue','wed','thu','fri','sat','sun'])->nullable();
            $table->enum('to_day',   ['mon','tue','wed','thu','fri','sat','sun'])->nullable();
            $table->time('from_time')->nullable();
            $table->time('to_time')->nullable();

            $table->integer('class_length_minutes')->default(30);
            $table->decimal('price', 8, 2)->default(0);

            $table->enum('status', ['draft', 'published'])->default('draft');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
