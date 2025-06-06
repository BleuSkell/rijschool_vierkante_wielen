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
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_students_with_enrollment_details');

        DB::unprepared('
            CREATE PROCEDURE sp_get_students_with_enrollment_details(
                IN p_studentId INT
            )
            BEGIN
                SELECT  students.id AS studentenId
                        ,users.id AS gebruikerId
                        ,users.name
                        ,enrollments.id AS inschrijvingId
                        ,enrollments.studentId
                        ,enrollments.packageId
                        ,enrollments.startDate
                        ,enrollments.endDate
                        ,packages.id AS pakketId
                        ,packages.type
                FROM enrollments

                INNER JOIN students
                ON students.id = enrollments.studentId

                INNER JOIN packages
                ON packages.id = enrollments.packageId

                INNER JOIN users
                ON users.id = students.userId

                WHERE students.id = p_studentId;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DROP PROCEDURE IF EXISTS sp_get_students_with_enrollment_details');
    }
};
