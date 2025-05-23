<?php

return [

    'site_key' => env('RECAPTCHA_V3_SITEKEY', ''),
    'secret_key' => env('RECAPTCHA_V3_SECRET', ''),
    'version' => 'v3',

    'skip_ip' => [],

    'default_validation_route' => 'biscolab-recaptcha/validate',

    'default_token_parameter_name' => 'recaptcha_token',

    'default_language' => null,

    'api_url' => 'https://www.google.com/recaptcha/api/siteverify',

    'curl_timeout' => 10,

    'curl_post' => [
        'secret' => null,
        'response' => null,
        'remoteip' => null,
    ],
];
