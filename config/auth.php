<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Settings
    |--------------------------------------------------------------------------
    |
    | Here you may configure the default authentication guard and password reset
    | settings for your application. You may change these as required for your
    | application.
    |
    */

    'defaults' => [
        'guard' => 'web', // Default guard for general users
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the authentication guards for your application.
    | A "guard" is a way of defining how users are authenticated for each
    | request. You can use different guards for the web or API.
    |
    | The "session" driver uses session storage for authentication. Other
    | drivers such as "token" or "jwt" are used for API authentication.
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session', // Session-based authentication for general users
            'provider' => 'users', // Refers to the "users" provider for the general users
        ],

        'admin' => [
            'driver' => 'session', // Session-based authentication for admin users
            'provider' => 'admins', // Refers to the "admins" provider for admin users
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication systems need a user provider. The provider defines how
    | users are retrieved from your database or other storage mechanisms.
    | You can use either the Eloquent ORM or the database query builder.
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent', // Using Eloquent ORM for users
            'model' => App\Models\User::class, // The User model for general users
        ],

        'admins' => [
            'driver' => 'eloquent', // Using Eloquent ORM for admins
            'model' => App\Models\Admin::class, // The Admin model for admin users
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Reset Settings
    |--------------------------------------------------------------------------
    |
    | Here you may define the password reset settings for your application.
    | You can change the table names, reset tokens expiration time, and throttle
    | settings for both users and admins.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users', // Refers to the "users" provider
            'table' => 'password_resets', // The table for password resets
            'expire' => 60, // Expiry time in minutes
            'throttle' => 60, // Rate limit for password reset requests
        ],

        'admins' => [
            'provider' => 'admins', // Refers to the "admins" provider
            'table' => 'password_resets', // The table for password resets
            'expire' => 60, // Expiry time in minutes
            'throttle' => 60, // Rate limit for password reset requests
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of seconds before the password reset
    | link will expire. By default, the reset link will expire after 10800 seconds
    | (3 hours).
    |
    */

    'password_timeout' => 10800,
];
