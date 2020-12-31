<?php

return [
    'authors' => [
        'baseUrl' => env('AUTHORS_SERVICE_BASE_URL'),
        'secret' => env('AUTHORS_SERVICE_SECRET')
    ],
    'books' => [
        'baseUrl' => env('BOOKS_SERVICE_BASE_URL'),
        'secret' => env('BOOKS_SERVICE_SECRET')
    ],
];
