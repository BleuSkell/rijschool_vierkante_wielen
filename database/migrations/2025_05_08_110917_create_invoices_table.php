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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollmentId')->constrained('enrollments')->onDelete('cascade');
            $table->string('invoiceNumber')->unique();
            $table->date('invoiceDate');
            $table->decimal('amountExcBtw', 10, 2);
            $table->integer('btw');
            $table->decimal('amountIncBtw', 10, 2);
            $table->string('invoiceStatus');
            $table->boolean('isActive')->default(true);
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
