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
        Schema::create('driving_lesson_pickup_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drivingLessonId')->constrained('driving_lessons')->onDelete('cascade');
            $table->foreignId('pickupAddressId')->constrained('pickup_addresses')->onDelete('cascade');
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
        Schema::dropIfExists('driving_lesson_pickup_addres');
    }
};
