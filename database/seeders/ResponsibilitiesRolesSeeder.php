<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsibilitiesRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responsibilities_roles')->insert([
            ['role_id' => 1,'responsibility_id' => 1 , 'created_at' => Carbon::now()],
            ['role_id' => 1,'responsibility_id' => 2 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 3 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 4 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 5 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 6 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 7 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 8 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 9 , 'created_at' => Carbon::now()],
            ['role_id' => 2,'responsibility_id' => 10 , 'created_at' => Carbon::now()],
            ['role_id' => 3,'responsibility_id' => 4 , 'created_at' => Carbon::now()],
            ['role_id' => 3,'responsibility_id' => 5 , 'created_at' => Carbon::now()],
            ['role_id' => 3,'responsibility_id' => 6 , 'created_at' => Carbon::now()],
            ['role_id' => 3,'responsibility_id' => 7 , 'created_at' => Carbon::now()],
            ['role_id' => 3,'responsibility_id' => 8 , 'created_at' => Carbon::now()],
            ['role_id' => 3,'responsibility_id' => 9 , 'created_at' => Carbon::now()],
            ['role_id' => 3,'responsibility_id' => 10 , 'created_at' => Carbon::now()],
            ['role_id' => 4,'responsibility_id' => 10 , 'created_at' => Carbon::now()],
            ['role_id' => 4,'responsibility_id' => 11 , 'created_at' => Carbon::now()],
            ['role_id' => 4,'responsibility_id' => 12 , 'created_at' => Carbon::now()],
            ]);
    }
}
