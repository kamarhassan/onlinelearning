<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'Admin online Training',
            'first_name'=>'admin',
            'middle_name'=>'-',
            'last_name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('1234'),
            'passwordischanged'=>1,
            'admin_status' =>1
        ]);
    }
}
