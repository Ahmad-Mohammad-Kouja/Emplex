<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('department_id')->after('bio')->constrained();
            $table->foreignId('role_id')->after('department_id')->constrained();
        });

        Schema::table('ratings', function (Blueprint $table) {
            $table->foreignId('employee_id')->after('date')->constrained('users','id');
            $table->foreignId('rater_id')->after('employee_id')->constrained('users','id');
        });

        Schema::table('requests', function (Blueprint $table) {
            $table->foreignId('requester_id')->after('response')->constrained('users','id');
            $table->foreignId('responder_id')->after('requester_id')->constrained('users','id');
            $table->foreignId('receivers_id')->after('responder_id')->constrained('roles','id');
        });

        Schema::table('notifications', function (Blueprint $table) {
            $table->foreignId('notifier_id')->after('type_id')->constrained('users','id');
            $table->foreignId('user_id')->after('notifier_id')->constrained('users','id');

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
