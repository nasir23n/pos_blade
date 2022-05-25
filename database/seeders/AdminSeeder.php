<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Nasrullah',
            'email' => 'admin@gmail.com',
            'admin_type' => 'president',
            'designation' => 'president',
            'phone' => '01763312883',
            'profile' => '',
            'address' => 'Address',
            'status' => 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        Admin::create([
            'name' => 'Nasir',
            'email' => 'admin@gmail.com',
            'admin_type' => 'president',
            'designation' => 'president',
            'phone' => '01700000000',
            'profile' => '',
            'address' => 'Address',
            'status' => 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
}
