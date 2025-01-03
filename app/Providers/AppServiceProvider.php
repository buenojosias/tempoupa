<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TallStackUi\Facades\TallStackUi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TallStackUi::personalize('card')
            ->block('header.text', 'text-gray-800 font-semibold')
            ->block('body', 'text-gray-700 dark:text-dark-300 grow rounded-b-xl px-4 py-5');
            // ->block('header.text')
            // ->replace('text-secondary-700', 'text-primary-800')
            // ->block('body')
            // ->replace('text-secondary-700', 'text-gray-700');
    }
}
