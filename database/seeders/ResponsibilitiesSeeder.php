<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsibilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('responsibilities')->insert(
           [
                ['name' => 'add Company' , 'created_at' => Carbon::now()],
                ['name' => 'Delete Company' , 'created_at' => Carbon::now()],
                ['name' => 'Edit Company' , 'created_at' => Carbon::now()],
                ['name' => 'Add User' , 'created_at' => Carbon::now()],
                ['name' => 'Edit User' , 'created_at' => Carbon::now()],
                ['name' => 'Delete User' , 'created_at' => Carbon::now()],
                ['name' => 'Add Vacation' , 'created_at' => Carbon::now()],
                ['name' => 'Edit Vacation' , 'created_at' => Carbon::now()],
                ['name' => 'Delete Vacation' , 'created_at' => Carbon::now()],
                ['name' => 'Show Company Users' , 'created_at' => Carbon::now()],
                ['name' => 'Show Department Users' , 'created_at' => Carbon::now()],
                ['name' => 'Edit Department User' , 'created_at' => Carbon::now()],
           ]
       );
    }
}
