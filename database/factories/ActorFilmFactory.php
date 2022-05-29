<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActorFilm>
 */
class ActorFilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->factory(Actor::class)->create()->id,
            'skill_id' => $this->faker->factory(Film::class)->create()->id,
        ];
    }
}
