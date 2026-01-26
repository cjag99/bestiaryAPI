<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];

        for ($i = 0; $i < 5; $i++) {
            $users[] = [
                'name' => "User {$i}",
                'email' => "user{$i}@example.com",
                'password' => Hash::make("password{$i}"),
                'active' => $i % 2 == 0 ? false : true
            ];
        }

        DB::table('users')->insert($users);
    }
}
