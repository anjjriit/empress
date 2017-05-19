<?php

/**
 * app/Providers/BreadcrumbServiceProvider.php
 *
 * Service Provider for managing breadcrumbs.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Providers;

use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('breadcrumb', function () {
            return $this->app->make('Empress\Services\Breadcrumbs');
        });
    }
}
