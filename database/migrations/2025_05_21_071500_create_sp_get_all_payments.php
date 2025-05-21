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
    DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_payments');

    DB::unprepared('
            CREATE PROCEDURE sp_get_all_payments(
                IN p_limit INT, IN p_offset INT
            )
            BEGIN
                SELECT  pay.Id AS paymentId
                        ,pay.invoiceId AS paymentInvoiceId
                        ,pay.date
                        ,pay.status
                        ,pay.note
                        ,inv.Id AS invoiceId
                        ,inv.invoiceNumber
                        ,inv.amountExcBtw
                        ,inv.btw
                        ,inv.amountIncBtw
                FROM payments AS pay
                INNER JOIN invoices AS inv
                    ON pay.invoiceId = inv.Id
                LIMIT p_limit OFFSET p_offset;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DROP PROCEDURE IF EXISTS sp_get_all_payments');
    }
};
