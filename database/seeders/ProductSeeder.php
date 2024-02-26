<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'LG Smart TV',
                'price'=>'16000',
                'category'=>'Electronics',
                'gallery'=>'https://www.lg.com/content/dam/channel/wcms/in/images/tvs/55uq9000psd_atr_eail_in_c/55UQ9000PSD-450.jpg',
                'description'=>'LG LQ64 32 (81.28cm) AI Smart HD TV | WebOS | HDR',
                
                'created_at' => now(),
                'updated_at' => now()
            
            ],
            
            [
                'name'=>'Panasonic Fridge',
                'price'=>'14000',
                'category'=>'Electronics',
                'gallery'=>'https://e-value.in/cdn/shop/products/nr-a193vmx1-3-panasonic-original-imafwgzfaz7e4d2h_1024x1024.jpg',
                'description'=>'Panasonic 197 L Single Door Refrigerator (Maroon Hairline)',
                
                'created_at' => now(),
                'updated_at' => now()
            
            ],
        ]);
    }
}
