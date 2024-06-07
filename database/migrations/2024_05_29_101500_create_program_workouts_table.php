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
        Schema::create('program_workouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id')->nullable(false);
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->unsignedBigInteger('workout_id')->nullable(false);
            $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
            $table->integer('reps')->nullable(false);
            $table->integer('sets')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_workouts');
    }
};
