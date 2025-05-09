<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studentId')->constrained('students')->onDelete('cascade');
            $table->foreignId('packageId')->constrained('packages')->onDelete('cascade');            
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
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
        Schema::table('enrollments', function (Blueprint $table) {
            $table->dropForeign(['studentId']);
            $table->dropForeign(['packageId']);
        });
        Schema::dropIfExists('enrollments');
    }
}
