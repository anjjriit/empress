<?php

/**
 * app/Console/Commands/EventMakeCommand.php
 *
 * Override for Event creation.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @author Gary Belvin    <gary@19peaches.com>
 * @license https://github.com/19peaches/collarmatch/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Collar\Console\Commands;

use Illuminate\Foundation\Console\EventMakeCommand as BaseEventMakeCommand;

/**
 * Local command for creating Events.
 */
class EventMakeCommand extends BaseEventMakeCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/event.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Events';
    }
}
