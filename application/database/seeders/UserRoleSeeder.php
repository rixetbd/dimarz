<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolePermission::create([
            "name"=>"Admin",
            "articles"=>1,
            "attendance"=>1,
            "category"=>1,
            "employee"=>1,
            "faq"=>1,
            "gigpage"=>1,
            "mainpage"=>1,
            "seo"=>1,
            "salary"=>1,
            "settings"=>1,
            "users"=>1,
            "workprocess"=>1,
            "created_at"=>Carbon::now(),
        ]);
    }
}
