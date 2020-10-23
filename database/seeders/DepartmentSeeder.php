<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(

             [
                 ['name' => 'SuperAdmin' , 'description' => 'SuperAdmin' , 'company_id' => 1 , 'created_at' => Carbon::now()],
                 ['name' => 'Admin' , 'description' => 'Administrator',  'company_id' => 2 , 'created_at' => Carbon::now()],
                 ['name' => 'HR' , 'description' => 'Human Resources',  'company_id' => 2 , 'created_at' => Carbon::now()],
                 ['name' => 'BackEnd' , 'description' => 'BackEnd Developers' , 'company_id' => 2 , 'created_at' => Carbon::now()],
                 ['name' => 'FrontEnd' , 'description' => 'FrontEnd Developers' , 'company_id' => 2 , 'created_at' => Carbon::now()],
                 ['name' => 'Android' , 'description' => 'android Developers' , 'company_id' => 2 , 'created_at' => Carbon::now()],
                 ['name' => 'Graphics' , 'description' => 'Graphics Designer' , 'company_id' => 2 , 'created_at' => Carbon::now()],
                 ['name' => 'Testers' , 'description' => 'Application Testers',  'company_id' => 2 , 'created_at' => Carbon::now()],

             ]
        );
    }
}
