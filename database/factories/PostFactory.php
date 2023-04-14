<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $location = ['Yangon','Mandalay','Pyay','Pyin Oo Lwin'];
        return [
            'title' => $this->faker->text(20),
            'Description'=>$this->faker->sentence(200),
            'price'=> rand(10000,100000),
            'location'=>$location[array_rand($location)],
            'rating' => rand(0,5)
        ];
    }
}
