<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Film::create([
            'id' => 1,
            'name' => 'Midnight Special',
            'preview_image' => 'http://localhost:3000/img/midnight-special.jpg',
            'background_image' => 'http://localhost:3000/img/midnight-special.jpg',
            'background_color' => '#828585',
            'video_link' => 'http://peach.themazzone.com/durian/movies/sintel-1024-surround.mp4',
            'preview_video_link' => 'https://download.blender.org/durian/trailer/sintel_trailer-480p.mp4',
            'rating' => 3.3,
            'scores_count' => 67815,
            'director' => 'Jeff Nichols',
            'starring' => '["Michael Shannon","Joel Edgerton","Kirsten Dunst"]',
            'run_time' => 112,
            'genre' => 'Action',
            'released' => 2016,
            'is_favorite' => false,
            'created_at' => '2025-12-04 09:49:42',
            'updated_at' => '2025-12-04 09:49:42',
        ]);

    }
}
