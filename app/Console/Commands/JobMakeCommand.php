<?php

/**
 * app/Console/Commands/JobMakeCommand.php
 *
 * Override for creating Jobs.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Console\Commands;

use Illuminate\Foundation\Console\JobMakeCommand as BaseJobMakeCommand;

class JobMakeCommand extends BaseJobMakeCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('sync')) {
            return __DIR__.'/stubs/job.stub';
        } else {
            return __DIR__.'/stubs/job-queued.stub';
        }
    }
}
