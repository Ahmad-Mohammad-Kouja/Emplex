<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
            [
                ['name' => 'Emplex', 'email' => 'info@Emplex.com' , 'created_at' => Carbon::now()],
                ['name' => 'Roynex' , 'email' => 'info@Roynex.com' , 'created_at' => Carbon::now()]
            ],
        );
    }
}
