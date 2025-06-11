<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInstructorProcedures extends Migration
{    public function up()
    {
        DB::unprepared('SET FOREIGN_KEY_CHECKS=0');

        // First drop any existing procedures
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_instructors');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_instructor_by_id');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_create_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_delete_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_next_instructor_number');

        // Get All Instructors procedure
        DB::unprepared('
            CREATE PROCEDURE sp_get_all_instructors()
            BEGIN
                SELECT 
                    i.*,
                    u.name as user_name,
                    u.email
                FROM instructors i
                JOIN users u ON i.userId = u.id
                ORDER BY i.number;
            END
        ');

        // Get Instructor by ID procedure
        DB::unprepared('
            CREATE PROCEDURE sp_get_instructor_by_id(IN instructor_id INT)
            BEGIN
                SELECT i.*, u.name as user_name, u.email 
                FROM instructors i
                JOIN users u ON i.userId = u.id
                WHERE i.id = instructor_id;
            END
        ');

        // Create Instructor procedure
        DB::unprepared('
            CREATE PROCEDURE sp_create_instructor(
                IN p_userId INT,
                IN p_number VARCHAR(50),
                IN p_isActive BOOLEAN,
                IN p_note VARCHAR(255)
            )
            BEGIN
                INSERT INTO instructors (userId, number, isActive, note, dateCreated, dateModified)
                VALUES (p_userId, p_number, p_isActive, p_note, NOW(), NOW());
                
                SELECT LAST_INSERT_ID() as id;
            END
        ');

        // Update Instructor procedure
        DB::unprepared('
            CREATE PROCEDURE sp_update_instructor(
                IN p_id INT,
                IN p_number VARCHAR(50),
                IN p_isActive BOOLEAN,
                IN p_note VARCHAR(255)
            )
            BEGIN
                UPDATE instructors 
                SET number = p_number,
                    isActive = p_isActive,
                    note = p_note,
                    dateModified = NOW()
                WHERE id = p_id;
            END
        ');

        // Delete Instructor procedure
        DB::unprepared('
            CREATE PROCEDURE sp_delete_instructor(IN instructor_id INT)
            BEGIN
                DELETE FROM instructors WHERE id = instructor_id;
            END
        ');

        // Get Next Available Instructor Number procedure
        DB::unprepared('
            CREATE PROCEDURE sp_get_next_instructor_number()
            BEGIN
                DECLARE next_num INT;
                
                SELECT IFNULL(MAX(CAST(SUBSTRING(number, 6) AS UNSIGNED)), 0) + 1
                INTO next_num
                FROM instructors
                WHERE number LIKE "INST-%";
                
                SELECT CONCAT("INST-", LPAD(next_num, 3, "0")) as next_number;
            END
        ');

        DB::unprepared('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down()
    {
        DB::unprepared('SET FOREIGN_KEY_CHECKS=0');
        
        // Drop the procedures in reverse order
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_next_instructor_number');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_delete_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_create_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_instructor_by_id');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_instructors');
        
        DB::unprepared('SET FOREIGN_KEY_CHECKS=1');
    }
}
