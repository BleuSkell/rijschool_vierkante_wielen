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
        Schema::create('pickup_addres', function (Blueprint $table) {
            $table->id();
            $table->integer('streetName', 50);
            $table->integer('houseNumber', 10);
            $table->integer('addition', 10)->nullable();
            $table->integer('postalCode', 10);
            $table->integer('place', 50);
            $table->boolean('isActive')->default(true);
            $table->string('comment', 255)->nullable();
            $table->dateTime('dateCreated')->nullable();
            $table->dateTime('dateModified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickup_addres');
    }
};
