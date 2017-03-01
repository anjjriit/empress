<?php

/**
 * app/Services/FormBuilder.php
 *
 * Ovverides the LaravelCollective for builder.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Services;

use Collective\Html\FormBuilder as Builder;

class FormBuilder extends Builder
{
	/**
     * Create a placeholder select element option.
     *
     * @param $display
     * @param $selected
     *
     * @return \Illuminate\Support\HtmlString
     */
    protected function placeholderOption($display, $selected)
    {
        $form = app('form');
        $html = app('html');

        $selected = $form->getSelectedValue(null, $selected);

        $options          = compact('selected');
        $options['value'] = '';

        return $form->toHtmlString(
            '<option disabled' . $html->attributes($options) . '>' . $html->escapeAll($display) . '</option>'
        );
    }
}
