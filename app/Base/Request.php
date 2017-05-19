<?php

/**
 * app/Base/Request.php
 *
 * Request class for form requests to extend.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Base;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }

        $message = '<ul>';
        
        foreach($errors as $error) {
        	foreach($error as $key => $value) {
        		$message .= '<li>' . $value . '</li>';
        	}
        }

        $message .= '</ul>';

        flash($message, 'Please Correct These Errors', 'danger');

        return $this->redirector->to($this->getRedirectUrl())
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }
}
