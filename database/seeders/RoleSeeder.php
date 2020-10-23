<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->insert([
           ['name' => 'SuperAdmin' , 'created_at' => Carbon::now()],
           ['name' => 'Admin' , 'created_at' => Carbon::now()],
           ['name' => 'Human Resources' , 'created_at' => Carbon::now()],
           ['name' => 'Head Of Department' , 'created_at' => Carbon::now()],
           ['name' => 'user' , 'created_at' => Carbon::now()],
           ]);
    }
}
