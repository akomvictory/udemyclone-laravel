<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'username' => 'test.akom@akom.com',
            'course_title' => 'programming', 
            'course_type' => 'free',
            'course_category' => 'programming',
            'course_moderator' => 'Victory Akom',
            'course_price' => 4000,
            'course_description' => 'Damn hot project with core functionality of any elearning platform',
            'course_photo' => '/uploads/5f7326c3ac97a1601382083.png',
            'course_demo_video' => '/storage/videos/5f7326c3ad99d1601382083.Laravel From Scratch [Part 6] - Fetching Data With Eloquent.mp4',
            ]);
    }
}
