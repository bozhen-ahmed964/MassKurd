<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_history_table', function (Blueprint $table) {
            $table->id();
            $table->string('Full_Name');
            $table->Integer('Age');
            $table->string('Gender');
            $table->string('Game_Type');
            $table->string('Phone_Number');
            $table->string('Pay');
            $table->string('Course_Pay')->default(0);
            $table->timestamps();
        });

        DB::unprepared('
            CREATE TRIGGER member_delete_trigger
            AFTER INSERT ON add_member_table
            FOR EACH ROW
            BEGIN
                INSERT INTO member_history_table (Full_Name, Age, Gender, Game_Type, Phone_Number, Pay, Course_Pay, created_at, updated_at)
                VALUES (OLD.Full_Name, OLD.Age, OLD.Gender, OLD.Game_Type, OLD.Phone_Number, OLD.Pay, OLD.Course_Pay, OLD.created_at, OLD.updated_at);
            END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS member_delete_trigger');
        Schema::dropIfExists('member_history_table');
    }
};
