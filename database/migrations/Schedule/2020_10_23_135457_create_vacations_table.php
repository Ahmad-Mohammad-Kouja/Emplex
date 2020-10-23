<?php

use App\Enums\VacationStateTypes;
use App\Enums\VacationTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('description',80);
            $table->enum('vacation_type',VacationTypes::getValues())->default(VacationTypes::vacation);
            $table->enum('state',VacationStateTypes::getValues())->default(VacationStateTypes::pending);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacations');
    }
}
