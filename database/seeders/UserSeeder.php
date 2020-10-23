<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           ['name' => 'SuperAdmin' , 'email' => 'superAdmin@emplex.com' ,'password' => Hash::make('password') ,
               'department_id' => 1 , 'role_id' => 1 , 'created_at' => Carbon::now()],

           ['name' => 'Roynex' , 'email' => 'admin@Roynex.com' ,'password' => Hash::make('password') ,
               'department_id' => 2 , 'role_id' => 2 , 'created_at' => Carbon::now()],

           ['name' => 'HR' , 'email' => 'HR@Roynex.com' ,'password' => Hash::make('password') ,
               'department_id' => 3 , 'role_id' => 3 , 'created_at' => Carbon::now()],

           ['name' => 'Ahmad Kouja' , 'email' => 'ahmadKouja@Roynex.com' ,'password' => Hash::make('password') ,
               'department_id' => 4 , 'role_id' => 4 , 'created_at' => Carbon::now()],

           ['name' => 'abdAlrahman wazzan' , 'email' => 'abdAlrahmanWazzan@Roynex.com' ,'password' => Hash::make('password') ,
               'department_id' => 5 , 'role_id' => 5 , 'created_at' => Carbon::now()],
        ]);
    }
}
