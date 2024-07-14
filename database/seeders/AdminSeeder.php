<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'fullname' => 'Admin Proferan',
            'email' => 'admin@proferan.com',
            'password' => '12345678'
        ];

        Admin::create($data);
    }
}
