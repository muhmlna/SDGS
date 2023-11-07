<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'nama' => 'Event 1',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
                'link' => 'https://google.com',
                'gambar' => 'logo.png',
                'status' => 'Belum Terlaksana',
                'tgl_event' => '2023-12-12'
            ],
            [
                'nama' => 'Event 2',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
                'link' => 'https://google.com',
                'gambar' => 'logo.png',
                'status' => 'Belum Terlaksana',
                'tgl_event' => '2023-12-12'
            ],
            [
                'nama' => 'Event 3',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
                'link' => 'https://google.com',
                'gambar' => 'logo.png',
                'status' => 'Belum Terlaksana',
                'tgl_event' => '2023-12-12'
            ],
        ];
        Event::query()->insert($events);
    }
}
