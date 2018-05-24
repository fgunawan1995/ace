<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => str_random(5),
            'address' => str_random(10),
            'website' => str_random(5).'.com',
            'email' => str_random(10).'@gmail.com',
        ]);
    }
}
