<?php

namespace Database\Seeders;

use App\Models\Archive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $archives = [
            [
                'tahun' => 2021,
                'link' => 'https://google.com'
            ],
            [
                'tahun' => 2022,
                'link' => 'https://google.com'
            ],
            [
                'tahun' => 2023,
                'link' => 'https://google.com'
            ],
        ];
        Archive::query()->insert($archives);
    }
}
