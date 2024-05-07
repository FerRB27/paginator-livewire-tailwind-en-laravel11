<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence();
            //code...
            return [
                //
                'titulo' => $name,
                'slug' => Str::slug($name, '-'),
                'extracto' => $this->faker->text(),
                'descripcion' => $this->faker->paragraph(),
                'imagen' => 'imagen/'. $this->faker->image('public/storage/imagen', 400, 300, null, false)
            ];
        }
}
