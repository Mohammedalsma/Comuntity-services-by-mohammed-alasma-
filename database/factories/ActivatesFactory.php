<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActivatesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word(),
            'location'=>$this->faker->word(),
            'category'=>$this->faker->word(),
            'type_of_work'=>$this->faker->word(),
            'org_id' => Organization::factory(),
            'descrption'=> $this->faker->paragraph(3)
            
        ];
    }
}
