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
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_invoices_by_id');

        DB::unprepared('
            CREATE PROCEDURE sp_get_invoices_by_id(
                IN invoice_id INT
            )
            BEGIN
                SELECT * FROM invoices 
                INNER JOIN enrollments ON invoices.enrollmentId = enrollments.Id
                WHERE id = invoice_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DROP PROCEDURE IF EXISTS sp_get_invoices_by_id');
    }
};
