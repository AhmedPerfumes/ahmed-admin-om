<?php

return [
    'tap_merchant_id'  => env('TAP_MERCHANT_ID'),
    'tap_secret_key'  => env('TAP_SECRET_KEY'),
    'tap_base_url'   => env('TAP_BASE_URL', 'https://api.tap.company/v2/charges'),
    'tap_redirect_url'   => env('TAP_REDIRECT_URL', 'https://api.tap.company/v2/charges/'),
];
