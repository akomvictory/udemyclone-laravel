<?php

use Illuminate\Database\Seeder;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->insert([
            'username' => 'test.akom@akom.com',
            'instructor_name' => 'John Doe', 
            'proffesion' => 'Programmer',
            'instructor_photo' => 'uploads/5f72ef96283681601367958.png',
            'email' => 'johndoe@test.com',
            'phone_number' => +2345908452,
            'instructor_bio' => 'Nice insructor with amazing capability',
            'intructor_facebook_link' => 'https://www.facebook.com/akom.kekung.1',
            'intructor_twitter_link' => 'https://www.twitter.com/akom_victory',
            'instructor_linkdin_link' => 'https://www.linkedin.com/akom_victory',
            'education_start_year' => '2017-09-06',
            'education_end_year' => '2020-09-17',
            'school_of_study' => 'Uni Abuja',
            'decipline' => 'Sociology',
            'study_description' => ' get really excited with cutting edge technologies.',
            'work_start_year' => '2016-10-19',
            'work_end_year' => '2020-09-24',
            'work_position' => 'Programmer',
            'company_name' => 'Tech Nigeria',
            'job_description' => 'Amazing place to be productive in career',
            
            ]);
    }
}
