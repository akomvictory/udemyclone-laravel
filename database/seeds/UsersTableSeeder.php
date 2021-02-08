<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Victory Akom',
            'email' => 'test.akom@akom.com', 
            'photo' => '/public/uploads/user.png',
            'role_id' => 1,
            'password' => bcrypt('password'),
        ]);
    }
}
