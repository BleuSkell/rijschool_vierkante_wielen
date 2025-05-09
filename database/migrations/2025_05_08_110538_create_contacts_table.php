<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->constrained()->onDelete('cascade');            
            $table->string('streetName', 100);
            $table->string('houseNumber', 10);
            $table->string('addition', 10)->nullable();
            $table->string('postalCode', 20);
            $table->string('city', 100);
            $table->string('mobile', 20)->nullable();
            $table->string('email', 100)->nullable();
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
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign(['userId']);
        });
        Schema::dropIfExists('contacts');
    }
}
