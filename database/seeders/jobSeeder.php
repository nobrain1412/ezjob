<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('job')->insert([
                'name' => 'Job ' . $i,
                'desc' => 'Description for Job ' . $i,
                'salary' => '50000', // Giả sử mức lương là 50000
                'subsidize' => '2000', // Giả sử trợ cấp là 2000
                'quantity' => rand(1, 10), // Số lượng người cần tuyển, giả sử từ 1 đến 10
                'requirement' => 'Requirements for Job ' . $i,
                'exp' => 'Experience for Job ' . $i,
                'jobTypeId' => rand(1, 3), // Giả sử có 5 loại công việc
                'categoriesId' => rand(1, 3), // Giả sử có 3 loại danh mục
                'shiftId' => rand(1, 3), // Giả sử có 2 ca làm việc
                'companyId' => rand(1, 10), // Giả sử có 10 công ty
                'status'=> '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
