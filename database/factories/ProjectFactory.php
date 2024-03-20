<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->text(20);

        $programmingLanguages = $this->faker->randomElements(['HTML', 'CSS', 'JavaScript', 'PHP'], rand(1, 4));

        $programmingLanguagesString = implode(',', $programmingLanguages);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph(15, true),
            'programming_languages' => $programmingLanguagesString,
        ];
    }
}
