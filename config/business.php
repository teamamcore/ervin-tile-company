<?php

// Placeholder business details — replace with Ervin Tile Company's real
// contact info, service area, and hours before launch.
return [
    'name' => env('BUSINESS_NAME', 'Ervin Tile Company'),
    'tagline' => env('BUSINESS_TAGLINE', 'High-End Tile, Installed Right'),
    'phone' => env('BUSINESS_PHONE', '(555) 010-1234'),
    'phone_tel' => env('BUSINESS_PHONE_TEL', '+15550101234'),
    'email' => env('BUSINESS_EMAIL', 'info@ervintile.com'),
    'address' => env('BUSINESS_ADDRESS', 'Serving the Greater Metro Area'),
    'service_area' => env('BUSINESS_SERVICE_AREA', 'Greater Metro Area & Surrounding Communities'),
    'hours' => env('BUSINESS_HOURS', 'Mon–Fri 8am–5pm, Saturday by appointment'),
    'license' => env('BUSINESS_LICENSE', 'Licensed & Insured'),
    'social' => [
        'instagram' => env('BUSINESS_INSTAGRAM_URL'),
        'facebook' => env('BUSINESS_FACEBOOK_URL'),
    ],
    'notification_email' => env('QUOTE_REQUEST_NOTIFICATION_EMAIL', env('BUSINESS_EMAIL', 'info@ervintile.com')),
];
