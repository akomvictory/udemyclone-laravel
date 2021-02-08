<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            'username' => 'John Doe',
            'message' => 'John Doe requested to be an instructor', 
                    
            ]);
    }
}
