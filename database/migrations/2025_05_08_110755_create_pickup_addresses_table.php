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
        Schema::create('pickup_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('streetName', 50);
            $table->integer('houseNumber');
            $table->string('addition', 10)->nullable();
            $table->string('postalCode', 10);
            $table->string('place', 50);
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
        Schema::dropIfExists('pickup_addres');
    }
};
