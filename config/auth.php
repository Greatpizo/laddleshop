<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */
    //
    'defaults' => [
            'guard' => 'web',
            'passwords' => 'users',
        ],
    'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],
    //
    //
    'guards' => [
            'web' => [
                'driver' => 'session',
                'provider' => 'users',
            ],
            'api' => [
                'driver' => 'token',
                'provider' => 'users',
            ],
            'admin' => [
                'driver' => 'session',
                'provider' => 'admins',
            ],
            'admin-api' => [
                'driver' => 'token',
                'provider' => 'admins',
            ],
        ],
    //
    //
    'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => App\User::class,
            ],
           'admins' => [
                'driver' => 'eloquent',
                'model' => App\Admin::class,
            ],
        ],
    //
    //
    'passwords' => [
            'users' => [
                'provider' => 'users',
                'table' => 'password_resets',
                'expire' => 60,
            ],
            'admins' => [
                'provider' => 'admins',
                'table' => 'password_resets',
                'expire' => 15,
            ],
        ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
