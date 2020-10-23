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
            $table->foreignId('user_id')->after('type_id')->constrained();
        });

        Schema::table('schedule_details', function (Blueprint $table) {
            $table->foreignId('schedule_id')->after('to')->constrained();
        });

        Schema::table('achievements', function (Blueprint $table) {
            $table->foreignId('schedule_detail_id')->after('attachment')->constrained();
        });

        Schema::table('vacations', function (Blueprint $table) {
            $table->foreignId('user_id')->after('state')->constrained();
            $table->foreignId('admin_id')->after('user_id')->constrained('users','id');
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
