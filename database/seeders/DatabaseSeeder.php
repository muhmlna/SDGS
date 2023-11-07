<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Journal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(OurteamSeeder::class);
        // $this->call(ArchiveSeeder::class);
        // $this->call(EventSeeder::class);
        // $this->call(JournalSeeder::class);
        // $this->call(ArticleSeeder::class);
        // $this->call(GalerySeeder::class);
    }
}
