<?php

return [
    'env' => env('OY_ENV', env('APP_ENV', 'local')),
    'credential' => [
        'username' => env('OY_CREDENTIAL_USERNAME'),
        'key' => env('OY_CREDENTIAL_KEY'),
    ],
];
