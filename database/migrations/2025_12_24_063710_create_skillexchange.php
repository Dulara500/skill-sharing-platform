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
        Schema::create('skillexchange', function (Blueprint $table) {
            $table->id();
            $table->unique(['user_id','teach']);
            $table->foreignID('user_id')->constrained()->onDelete('cascade');
            $table->json('teach');
            $table->string('exchange');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skillexchange');
        Schema::table('skillexchange', function (Blueprint $table) {
            $table->dropUnique(['user_id', 'exchange']);
        });
    }
};
