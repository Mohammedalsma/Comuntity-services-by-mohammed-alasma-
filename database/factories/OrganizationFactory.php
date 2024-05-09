<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'org_name'=>$this->faker->word(),
            'location'=>$this->faker->word(),
            'descrption'=> $this->faker->paragraph(2),
            'owner_id' => User::factory()
        ];
    }
}
