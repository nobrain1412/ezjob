<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('company')->insert([
                'name' => 'Company ' . $i,
                'address' => 'Address ' . $i,
                'email' => 'company' . $i . '@example.com',
                'image' => 'image_path_' . $i,
                'website' => 'http://company' . $i . '.com',
                'phone' => '123-456-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'map' => 'https://maps.app.goo.gl/MVR624D4eUAw64v56',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
