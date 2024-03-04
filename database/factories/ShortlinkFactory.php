<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Shortlink;
use App\Models\User;

class ShortlinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'user_id' => $this->faker->numberBetween(1,5),
            'user_id' => User::factory(),
            'code' => $this->faker->unique()->word,
            'link' => 'https://www.' . $this->faker->word . '.com',
        ];
    }
}
