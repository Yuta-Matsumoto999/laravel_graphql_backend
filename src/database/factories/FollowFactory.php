<?php

namespace Database\Factories;

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
        $accountId = fake()->numberBetween(1, 10);
        return [
            "account_id" => $accountId,
            "follow_id" => function () use ($accountId) {
                $followId = fake()->numberBetween(1, 10);
                while ($followId === $accountId) {
                    $followId = fake()->numberBetween(1, 10);
                }
                return $followId;
            }
        ];
    }
}