<?php

use Illuminate\Database\Seeder;

class CurriculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curricula')->insert([
            'username' => 'test.akom@akom.com',
            'course_ref_id' => 2, 
            'curriculum_title' => 'programming',
            'video_play_time' => 3.45,
            ]);
    }
}
