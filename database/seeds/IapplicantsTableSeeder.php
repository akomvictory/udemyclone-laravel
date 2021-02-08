<?php

use Illuminate\Database\Seeder;

class IapplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iapplicants')->insert([
            'username' => 'John Doe',
        ]);
    }
}
