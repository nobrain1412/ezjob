<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Chuyên ngày', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chuyên đêm', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ngày và đêm', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('shift')->insert($data);
    }
}
