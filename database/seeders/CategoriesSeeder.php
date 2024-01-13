<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Sản xuất', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lắp ráp', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'QC', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khác', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('categories')->insert($data);
    }
}
