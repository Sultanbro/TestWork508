<?php

namespace App\Providers;

use App\Repository\Actor\ActorRepository;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Film\FilmRepository;
use App\Repository\Interface\Actor\ActorRepositoryInterface;
use App\Repository\Interface\EloquentRepositoryInterface;
use App\Repository\Interface\Film\FilmRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(FilmRepositoryInterface::class, FilmRepository::class);
        $this->app->bind(ActorRepositoryInterface::class, ActorRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
