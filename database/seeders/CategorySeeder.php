<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'nama' => 'Pendidikan'
            ],
            [
                'id' => 2,
                'nama' => 'Penelitian'
            ],
            [
                'id' => 3,
                'nama' => 'Pengabdian'
            ],
        ];
        Category::query()->insert($categories);
    }
}
