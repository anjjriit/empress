<?php

/**
 * app/Services/Breadcrumbs.php
 *
 * Breadcrumbs concrete for breadcrumbs service provider.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Services;

class Breadcrumbs
{
	/**
	 * Breadcrumbs
	 * 
	 * @var array
	 */
	protected $breadcrumbs = [];

	/**
	 * Add a new breadcrumb to the stack.
	 * 
	 * @param string $text
	 * @param string $route
	 */
	public function add($text, $route = null)
	{
		$this->breadcrumbs[] = [
			'text'  => $text,
			'route' => ! is_null($route) ? $route : 'last'
		];
	}

	/**
	 * Return the breadcrumbs array.
	 * 
	 * @return array breadcrumbs
	 */
	public function render()
	{
		return $this->breadcrumbs;
	}
}
