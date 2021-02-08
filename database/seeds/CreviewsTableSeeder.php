<?php

use Illuminate\Database\Seeder;

class CreviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creviews')->insert([
            'username' => 'test.akom@akom.com',
            'title' => 'Nice course sure improve my developer skill', 
            'course_id' => 1,
            'description' => 'Keep the good works guys, your courses are always world class',
            'rating' => 'test',
             ]);
    }
}
