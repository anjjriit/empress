<?php

/**
 * routes/helpers.php
 *
 * Empress application helpers.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

if (! function_exists('bcs')) 
{
	/**
	 * Return the breadcrumb instance from the container
	 * or push new crumbs to instance.
	 * 
	 * @param  string|array $text
	 * @param  string $route
	 * @return \Empress\Services\Breadcrumbs|void
	 */
	function bcs($text = null, $route = null) 
	{
		// If nothing is passed return the object.
		if (is_null($text) && is_null($route)) {
			return app('breadcrumb');
		}

		// Array passed, parse it and return.
		if (is_array($text)) {
			foreach ($text as $key => $value) {
				if (is_null($value)) {
					app('breadcrumb')->add($key);
				} else {
					app('breadcrumb')->add($key, $value);
				}
			}

			return;
		}

		// No route
		if (is_null($route)) {
			return app('breadcrumb')->add($text);
		}

		// Normal single add
		app('breadcrumb')->add($text, $route);
	}
}

if (! function_exists('parsedown'))
{
	/**
	 * Convert the markdown content to html.
	 * 
	 * @param  string $content
	 * @return string
	 */
	function parsedown($content)
	{
		$parse = new Parsedown();

		return $parse->text($content);
	}
}

if (! function_exists('version'))
{
	/**
	 * Get the current latest version of the app from GitHub.
	 * 
	 * @return string
	 */
	function version()
	{
		$version = app('version')->fetch();

		return $version->name();
	}
}
