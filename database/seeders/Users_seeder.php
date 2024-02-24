<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Abhi Patel',
            'email'=>'abhipatel@gmail.com',
            'password'=>Hash::make('*'),
            'created_at' => now(),
            'updated_at' => now()
        
        ]);
    }
}
