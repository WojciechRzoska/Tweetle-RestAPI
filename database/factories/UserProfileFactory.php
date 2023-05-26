<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'bio' => fake()->text(160),
            'location' => fake()->city(),
            'website' => fake()->url(),
            'dateOfBirth' => fake()->dateTimeBetween()->format('Y-m-d'),
        ];
    }
}
