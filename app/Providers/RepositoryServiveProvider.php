<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ShortlinkRepositoryInterface;
use App\Repositories\ShortlinkRepository;

class RepositoryServiveProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(
            ShortlinkRepositoryInterface::class, ShortlinkRepository::class
        );
    }
}
