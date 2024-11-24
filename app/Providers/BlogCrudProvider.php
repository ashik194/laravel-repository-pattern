<?php

namespace App\Providers;

use App\Interfaces\CrudInterface;
use App\Repositories\BlogRepository;
use Illuminate\Support\ServiceProvider;

class BlogCrudProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CrudInterface::class, BlogRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
