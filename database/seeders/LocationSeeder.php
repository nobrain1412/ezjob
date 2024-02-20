<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Hà nam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Châu sơn', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Đồng văn', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('location')->insert($data);
    }
}
