<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

  'google' => [
        'client_id' => '938698692294-fv695cghss0jqmd567pqrh17v9ah8fhs.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://examcentrelondon.co.uk/callback/google',
    ],

    'facebook' => [
        'client_id' => '220811240238361',
        'client_secret' => '698b2be0d2b75359da218d65c679735d',
        'redirect' => 'https://examcentrelondon.co.uk/facebook/callback',
    ],


];
