<?php

namespace Database\Seeders;

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
            [
                'name' => 'test',
                'email' =>'test@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/01 11:11:11'
            ],
            [
                'name' => 'test1',
                'email' =>'test1@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/01 11:11:11'

            ],
            [
                'name' => 'test2',
                'email' =>'test2@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/01 11:11:11'

            ],

        ]);
    }
}
