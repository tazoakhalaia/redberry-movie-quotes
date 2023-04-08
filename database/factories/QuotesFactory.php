<?php

namespace Database\Factories;

use App\Models\Movies;
use App\Models\Quotes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quotes>
 */
class QuotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Quotes::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'name' => $this->faker->name(),
            'img' => $this->faker->imageUrl(),
            'movie_id' => Movies::factory()->create()->id,
        ];
    }
}
