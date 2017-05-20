<?php

/**
 * app/Services/Version.php
 *
 * Determine the current app version based on GitHub latest tag.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Services;

class Version
{
	/**
	 * @var string
	 */
	protected $name;

	/**
	 * Fetch the current tag from GitHub and set the name property.
	 * 
	 * @return object
	 */
	public function fetch()
	{
		$file = @json_decode(@file_get_contents("https://api.github.com/repos/periaptio/empress/tags", false,
            stream_context_create(['http' => ['header' => "User-Agent: Empress\r\n"]])
        ));
		
		$this->name = $file ? reset($file)->name : 'master';

		return $this;
	}

	/**
	 * Fetch the name of the version and return it.
	 * 
	 * @return string
	 */
	public function name()
	{
		return $this->name;
	}
}
