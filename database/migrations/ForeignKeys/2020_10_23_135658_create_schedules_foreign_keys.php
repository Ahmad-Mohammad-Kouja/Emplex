<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('schedule_details', function (Blueprint $table) {
            $table->foreignId('schedule_id')->constrained();
        });

        Schema::table('achievements', function (Blueprint $table) {
            $table->foreignId('schedule_detail_id')->constrained();
        });

        Schema::table('vacations', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('admin_id')->constrained('users','id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
