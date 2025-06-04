<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class DropInstructorProcedures extends Migration
{
    public function up()
    {
        // Drop any existing procedures
        DB::unprepared('SET FOREIGN_KEY_CHECKS=0');
        
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_instructors');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_instructor_by_id');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_create_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_delete_instructor');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_next_instructor_number');
        
        DB::unprepared('SET FOREIGN_KEY_CHECKS=1');
    }

    public function down()
    {
        // Nothing to do in down() as we're just cleaning up procedures
    }
}
