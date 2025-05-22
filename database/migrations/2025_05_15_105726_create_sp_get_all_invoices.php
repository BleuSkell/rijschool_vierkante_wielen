<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_invoices');

        DB::unprepared('
            CREATE PROCEDURE sp_get_all_invoices(
                IN p_limit INT, IN p_offset INT
            )
            BEGIN
                SELECT * FROM invoices
                LIMIT p_limit OFFSET p_offset;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DROP PROCEDURE IF EXISTS sp_get_all_invoices');
    }
};
