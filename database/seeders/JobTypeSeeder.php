<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Chính Thức', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thời Vụ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Khác', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('job_type')->insert($data);
    }
}
