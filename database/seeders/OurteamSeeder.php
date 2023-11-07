<?php

namespace Database\Seeders;

use App\Models\Ourteam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurteamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ourteams = [
            [
                'id' => 1,
                'gambar' => NULL,
            ]
        ];
        Ourteam::query()->insert($ourteams);
    }
}
