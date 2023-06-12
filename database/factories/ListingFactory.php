<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'company' => $this->faker->company(),
            'description' => $this->faker->paragraph(5),
            'email' => $this->faker->companyEmail(),
            'location' => $this->faker->city(),
            "tags" => array_rand(["Electric", "Luxury", "Sedan", "SUV"]),
            'title' => $this->faker->sentence(),
            
            
            
            'website' => $this->faker->url(),
            
            

        ];
    }
}
