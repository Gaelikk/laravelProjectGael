<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'description' => "string", 'completed' => "false"])] public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(3),
            'completed' => false,
        ];
    }
}
