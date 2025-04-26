<?php

// database/seeders/NewAboutSectionSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewAboutSection;

class NewAboutSectionSeeder extends Seeder
{
    public function run()
    {
        NewAboutSection::updateOrCreate(
            ['id' => 1],
            [
                'sm_title' => 'Know About Us',
                'big_title' => 'Why Choose Us?',
                'description' => 'We offer your child the opportunity to build real-world coding skills and work on hands-on tech projects.',
                'image' => '/assets/Landing_1/assets/images/about/about-2/about-img.png',

                'overview_icon' => '/assets/Landing_1/assets/images/about/about-1/user.svg',
                'overview_number' => '2k+',
                'overview_text' => 'Full Time Student',
                'btn_text' => 'Book Now',
                'btn_link' => '/about-us',
                'feature_cards' => json_encode([
                    [
                        'icon' => '/path/to/icon1.png',
                        'title' => 'Certified Curriculum',
                        'description' => 'Accredited learning paths designed by experts from MIT and Google.',
                    ],
                    [
                        'icon' => '/path/to/icon2.png',
                        'title' => 'Live, Interactive Online Classes',
                        'description' => 'Choose between private 1-on-1 sessions or group classes tailored to your child’s learning style.',
                    ],
                    [
                        'icon' => '/path/to/icon3.png',
                        'title' => 'Fun & Simplified Learning',
                        'description' => 'We teach high-demand tech skills in a simple, engaging way, making coding fun and easy to understand.',
                    ],
                    [
                        'icon' => '/path/to/icon4.png',
                        'title' => 'Top Expert Instructors',
                        'description' => 'Your child will be guided by experienced engineers who teach in both Arabic and English for the best learning experience.',
                    ],
                    [
                        'icon' => '/path/to/icon5.png',
                        'title' => 'Clear Career Pathway',
                        'description' => 'Our comprehensive programs include a step-by-step roadmap that helps your child build a solid tech career foundation.',
                    ],
                    [
                        'icon' => '/path/to/icon6.png',
                        'title' => 'Ongoing Support After Class',
                        'description' => 'We offer continuous mentoring and follow-ups to boost your child’s skills and help them grow confidently in the tech world.',
                    ],
                    // Add more feature cards as needed
                ]),
            ]
        );
    }
}

