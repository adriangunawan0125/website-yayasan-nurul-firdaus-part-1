<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;  
use Illuminate\Support\Facades\Hash;  

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
    
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
    }
    
    
}
