<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'is_admin' => 1,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('12345678')
            ]);
            DB::table('users')->insert([
                'name' => Str::random(10),
                'is_admin' => 2,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('12345678')
            ]);
            DB::table('users')->insert([
                'name' => Str::random(10),
                'is_admin' => 3,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('12345678')
            ]);
        }
    }
}
