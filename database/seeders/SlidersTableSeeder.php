<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
use Faker;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
       
        Slider::create([
            'uuid' => $faker->uuid(),
            'title' => $faker->name,
            'path' => $faker->imageUrl(640,480),
            'alt' => $faker->sentence(),
            'caption' => $faker->sentence(),
            'created_by' => $faker->email(),
            'updated_by' => $faker->email()
        ]);
    }
}
