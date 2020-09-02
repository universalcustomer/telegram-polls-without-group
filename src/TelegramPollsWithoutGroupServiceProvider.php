<?php

namespace SergioBogatsky\TelegramPollsWithoutGroup;

use Illuminate\Support\ServiceProvider;

class TelegramPollsWithoutGroupServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->
        $this->app->make('SergioBogatsky\TelegramPollsWithoutGroup\models\Poll\Poll');
        $this->app->make('SergioBogatsky\TelegramPollsWithoutGroup\models\Poll\Question');
        $this->app->make('SergioBogatsky\TelegramPollsWithoutGroup\models\Poll\Response');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes');
        $this->loadViewsFrom(__DIR__.'/views', 'SergioBogatsky\TelegramPollsWithoutGroup');

        if ($this->app->runningInConsole()) {
            $this->commands([
                'php artisan migrate'
            ]);
        }
    }
}
