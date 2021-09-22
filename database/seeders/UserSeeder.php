<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

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
            'id'=> '3',
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id'=>1

        ]);
    }
}
