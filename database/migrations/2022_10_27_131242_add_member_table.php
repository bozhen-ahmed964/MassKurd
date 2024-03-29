<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('add_member_table')) {
            Schema::create('add_member_table', function (Blueprint $table) {
                $table->id();
                $table->string('Full_Name');
                $table->Integer('Age');
                $table->string('Gender');
                $table->string('Phone_Number');
                $table->Integer('Weight');
                $table->string('Height');
                $table->string('Game_Type');
                $table->string('Pay');
                $table->string('Course_Pay')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
