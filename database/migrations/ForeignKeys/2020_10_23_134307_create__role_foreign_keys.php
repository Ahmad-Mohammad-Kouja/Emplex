<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('responsibilities', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
        });
        Schema::table('responsibilities_roles', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
            $table->foreignId('responsibility')->constrained('responsibilities','id');
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
