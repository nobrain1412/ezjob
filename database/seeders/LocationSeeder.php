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
            ['name' => '', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('shift')->insert($data);
    }
}
