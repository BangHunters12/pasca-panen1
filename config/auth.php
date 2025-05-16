<?php

return [
'defaults' => [
    'guard' => 'web',
    'passwords' => 'petani',
],

'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'petani',
    ],
],

'providers' => [
    'petani' => [
        'driver' => 'eloquent',
        'model' => App\Models\Petani::class,
    ],
],

'passwords' => [
    'petani' => [
        'provider' => 'petani',
        'table' => 'password_reset_tokens',
        'expire' => 60,
    ],
],


];
