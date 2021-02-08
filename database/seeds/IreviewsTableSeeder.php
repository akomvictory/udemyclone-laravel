<?php

use Illuminate\Database\Seeder;

class IreviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ireviews')->insert([
            'username' => 'Victory Akom',
            'title' => 'Victory Akom review', 
            'instructor_name' => 'Victory Akom',
            'description' => 'Nice dude love your courses',
            'rating' => 'test',
           
            ]);
    }
}
