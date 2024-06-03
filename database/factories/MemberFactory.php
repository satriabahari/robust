<?php

namespace Database\Factories;

use App\Models\duration;
use App\Models\Membership;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'date_birth' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'membership_id' => Membership::factory(),
            'duration_id' => duration::factory(),
        ];
    }
}
