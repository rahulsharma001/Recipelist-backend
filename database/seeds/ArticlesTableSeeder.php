<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('recipes')->insert([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
}
}
