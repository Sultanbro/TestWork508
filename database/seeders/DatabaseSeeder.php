<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\ActorFilm;
use App\Models\Film;
use Database\Factories\ActorFactory;
use Database\Factories\FilmFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Actor::factory(8)->create();
        Film::factory(8)->create();

        foreach (Film::all() as $film) {
            $actors = Actor::inRandomOrder()->take(rand(1,3))->pluck('id');
                $film->actors()->attach($actors);
        }
    }
}
