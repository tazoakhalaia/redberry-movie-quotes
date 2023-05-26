<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Quote::class;
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->randomNumber(),
            'title' => json_encode([
                'en' => $this->faker->word,
                'ka' => $this->faker->word
            ]),
            'img' => $this->faker->imageUrl,
            'movie_id' => function () {
                return Movie::factory()->create()->id;
            },
        ];
    }
}
