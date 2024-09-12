<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Queue\Jobs\JobName;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id'=>Employer::factory(),
            'title'=>fake()->jobTitle(),
            'salary'=>fake()->randomElement(['$10,000 USD','$50,000 USD','$170,000 USD']),
            'location'=>'remote',
            'schedule'=>'Full Time',
            'url' => fake()->url(),
            'featured' =>false
        ];
    }
}
