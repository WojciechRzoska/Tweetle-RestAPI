<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Follow>
 */
class FollowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'follower_id' => $followerId = fake()->numberBetween(1, User::count()),
            'followed_id' => function () use ($followerId) {
                $followedId = fake()->numberBetween(1, User::count());
                
                while ($followedId === $followerId) {
                    $followedId = fake()->numberBetween(1, User::count());
                }
        
                return $followedId;
            },
        ];
    }
}
