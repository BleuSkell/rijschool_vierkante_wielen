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
        Schema::create('driving_lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('enrollmentId');
            $table->unsignedInteger('instructorId');
            $table->unsignedInteger('carId');
            $table->dateTime('startDate')->nullable();
            $table->datetime('startTime')->nullable();
            $table->dateTime('endDate')->nullable();
            $table->datetime('endTime')->nullable();   
            $table->string('lessonStatus', 50);
            $table->string('goal', 50);
            $table->boolean('isActive')->default(true);
            $table->string('note', 255)->nullable();
            $table->dateTime('dateCreated')->nullable();
            $table->dateTime('dateModified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_lessons');
    }
};
