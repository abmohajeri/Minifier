<?php

namespace abolfazl\minifier;

use Illuminate\Support\ServiceProvider;

class MinifierServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app('router')->aliasMiddleware('minify', Minifier::class);
    }

}
