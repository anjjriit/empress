<?php

/**
 * bootstrap/app.php
 *
 * Application bootstrapper.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    Empress\Base\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    Empress\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Empress\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Version Concrete
|--------------------------------------------------------------------------
|
| Next we'll add in our version concrete to the container. This allows us
| to ensure that users are running the current version of Empress and
| we can notify them in the admin are if they need to upgrade.
|
*/

$app->singleton('version', function ($app) {
    return $app->make('Empress\Services\Version');
});

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
