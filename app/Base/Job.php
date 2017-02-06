<?php

/**
 * app/Base/Job.php
 *
 * Local class for creating and queueing jobs.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @author Gary Belvin    <gary@19peaches.com>
 * @license https://github.com/19peaches/collarmatch/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Collar\Base;

use Illuminate\Bus\Queueable;

/**
 * Local job abstract class.
 */
abstract class Job
{
    use Queueable;
}
