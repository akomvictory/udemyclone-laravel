<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'username' => 'John Doe',
            'video' => '/storage/videos/5f72f7bcdfbbe1601370044.Digital Marketing Tutorial for Beginners Online course _ Digital nest.mp4', 
            'title' => 'Begineer programming course', 
            'course_ref_id' => 1, 
            'video_play_time' => 3.45, 
            'poster' => 'C:\Users\VICTORY\AppData\Local\Temp\phpC815.tmp',     
            ]);
    }
}
