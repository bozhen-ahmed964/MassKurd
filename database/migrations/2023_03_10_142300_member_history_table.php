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

        DB::unprepared('CREATE TRIGGER `copy_table_trigger` AFTER INSERT ON `add_member_table` FOR EACH ROW
            INSERT INTO `member_history_table` (`Full_Name`, `Age`, `Gender`, `Game_Type`, `Phone_Number`, `Pay`, `Course_Pay`, `created_at`, `updated_at`)
            VALUES (NEW.Full_Name, NEW.Age, NEW.Gender, NEW.Game_Type, NEW.Phone_Number, NEW.Pay, NEW.Course_Pay ,NEW.created_at, NEW.updated, NOW(), NOW())');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS copy_table_trigger');
        Schema::dropIfExists('member_history_table');
    }
};
