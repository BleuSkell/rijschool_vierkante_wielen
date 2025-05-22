<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->constrained('users')->onDelete('cascade');            
            $table->string('name', 100)->default('Student');
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
        Schema::table('roles', function (Blueprint $table) {
            $table->dropForeign(['userId']);
        });
        Schema::dropIfExists('roles');
    }
}