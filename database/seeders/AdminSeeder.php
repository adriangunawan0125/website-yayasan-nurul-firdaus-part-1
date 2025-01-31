<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;  // Import model Admin
use Illuminate\Support\Facades\Hash;  // Import Hash facade

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate(); // Kosongkan tabel
    
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
    }
    
    
}
