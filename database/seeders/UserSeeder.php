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
        dd(4444);
        DB::table('users')->insert([
            'name' => 'tuanngoc',
            'email' => 'tuangoc@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
