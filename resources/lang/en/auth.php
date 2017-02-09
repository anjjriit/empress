<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
   
    'register' => [
        'title'            => 'Meet Kinksters for Free Today',
        'sub-heading'      => 'Trying to find your perfect kinky match?',
        'description'      => '<p>Whether you\'re looking for a long-term relationship or just a play partner, you came to the right place.</p><p>Sign up now for a one week free trial and see who\'s looking for you.</p>',
        'nickname'         => 'Nickname',
        'email'            => 'E-mail Address',
        'password'         => 'Password',
        'confirm'          => 'Confirm Password',
        'agree'            => 'I agree to the <a href=":link">terms and conditions.</a>',
        'send'             => 'Get Kinky',
        'success-message'  => 'Please check your email for a link to activate your account, and finish your sign up.',
        'activate-error'   => 'Your account has either already been activated, or there is a typo in your activation token.',
        'activate-success' => 'Thank you for activating your account.'
    ],
    'login' => [
        'title'    => 'Login &amp; Get Kinky',
        'nick'     => 'Nickname or E-mail',
        'password' => 'Password',
        'remember' => 'Remember Me',
        'forgot'   => 'Forgot Password?',
    ],

    // Native to Laravel
    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

];
