<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeroSection::updateOrCreate([
            'title' => 'Inspiring Today’s Minds...',
            'description' => 'Learning coding and AI is no longer optional...',
            'button_text' => 'Explore Now',
        ]);
    }
}
