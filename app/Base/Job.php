<?php

/**
 * app/Base/Job.php
 *
 * Local class for creating and queueing jobs.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Base;

use Illuminate\Bus\Queueable;

abstract class Job
{
    use Queueable;
}
