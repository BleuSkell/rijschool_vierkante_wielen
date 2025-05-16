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
                SELECT inv.enrollmentId
                        ,inv.invoiceNumber
                        ,inv.invoiceDate
                        ,inv.amountExcBtw
                        ,inv.btw
                        ,inv.amountIncBtw
                        ,inv.invoiceStatus
                        ,inv.note AS invoiceNote
                        ,enr.studentId
                        ,enr.packageId
                        ,enr.startDate
                        ,enr.endDate
                        ,enr.note AS enrollmentNote
                        ,stu.relationNumber
                        ,stu.note AS studentNote
                FROM invoices AS inv
                INNER JOIN enrollments AS enr
                    ON inv.enrollmentId = enr.Id
                INNER JOIN students AS stu
                    ON enr.studentId = stu.Id
                WHERE inv.id = invoice_id;
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
