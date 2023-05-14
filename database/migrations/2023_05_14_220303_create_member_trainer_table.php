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
        if (!Schema::hasTable('member_trainer')) {
            Schema::create('member_trainer', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('member_id');
                $table->unsignedBigInteger('trainer_id');
                $table->timestamps();

                $table->foreign('member_id')->references('id')->on('add_member_table')->onDelete('cascade');
                $table->foreign('trainer_id')->references('id')->on('trainerTable')->onDelete('cascade');
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
        Schema::dropIfExists('member_trainer');
    }
};
