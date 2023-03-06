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
        if (!Schema::hasTable('trainerTable')) {
            Schema::create('trainerTable', function (Blueprint $table) {
                $table->id();
                $table->string('Trainer_Image');
                $table->string('Trainer_Name');
                $table->Integer('Age');
                $table->string('Gender');
                $table->string('Phone_Number');
                $table->Integer('Pay');
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
        //
    }
};
