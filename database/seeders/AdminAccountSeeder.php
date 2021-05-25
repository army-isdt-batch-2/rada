<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB, Carbon;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
                'name'=>'Super Admin',
                'username'=>'admin',
                'password'=>bcrypt('123'),
                'created_at' => Carbon\Carbon::now(),
                'updated_at'=> Carbon\Carbon::now()

        ]);
       
    }
}
