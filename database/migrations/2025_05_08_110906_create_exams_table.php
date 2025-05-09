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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollmentId')->constrained('enrollments')->onDelete('cascade');
            $table->foreignId('instructorId')->constrained('instructors')->onDelete('cascade');
            $table->date('startDate');
            $table->time('startTime');
            $table->date('endDate');
            $table->time('endTime');
            $table->string('location');
            $table->string('result');
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
        Schema::dropIfExists('exams');
    }
};
