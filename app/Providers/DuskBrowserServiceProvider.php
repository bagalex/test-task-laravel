<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\Browser;
use PHPUnit_Framework_Assert as PHPUnit;

class DuskBrowserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Browser::macro('assertCount', function ($expectedCount, $haystack, $message = '') {
            PHPUnit::assertCount($expectedCount, $haystack, $message);

            return $this;
        });

        Browser::macro('assertGreaterThan', function ($expected, $actual, $message = '') {
            PHPUnit::assertGreaterThan($expected, $actual, $message);

            return $this;
        });

        Browser::macro('assertEquals', function ($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10,
                                                 $canonicalize = false, $ignoreCase = false) {
            PHPUnit::assertEquals($expected, $actual, $message, $delta, $maxDepth, $canonicalize, $ignoreCase);

            return $this;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
