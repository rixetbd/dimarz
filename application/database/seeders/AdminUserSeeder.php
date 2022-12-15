<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => "Admin",
            'username' => "admin".'-'.rand(101,999),
            'email' => "admin@mail.com",
            'password' => Hash::make("admin"),
            'role' => 1,
        ]);
    }
}
