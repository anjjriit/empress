<?php

/**
 * app/Console/Commands/ModelMakeCommand.php
 *
 * Override for creating Models.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @author Gary Belvin    <gary@19peaches.com>
 * @license https://github.com/19peaches/collarmatch/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Collar\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as BaseModelMakeCommand;

/**
 * Local Model creation command.
 */
class ModelMakeCommand extends BaseModelMakeCommand
{
	/**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/model.stub';
    }
    
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Models';
    }
}
