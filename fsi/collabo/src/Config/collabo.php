<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Flutterwave, fsi key and other providers variables
    |--------------------------------------------------------------------------
    |
    | The variables for Flutterwave, fsi key and other providers from the .env file
    |
    */

    /**
     * flutter_baseurl: Your Rave publicKey. Sign up on https://fsi-gateway/api/flutterwave to get one from your settings page
     *
     */
    'flutter_baseurl' => env('FSI_FLUTTER_BASE_URL', 'http://94.250.201.163:9292/fsi-gateway/api/flutterwave'),

    /**
     * baseurl: Your Rave publicKey. Sign up on https://fsi-gateway/api/flutterwave to get one from your settings page
     *
     */
    'baseurl' => env('FSI_BASE_URL', 'http://94.250.201.163:9292/fsi-gateway/api/auth/sys-login'),

    /**
     * ux: Your ux key from fsi.
     *
     */
    'ux' => env('FSI_UX', 'testdrive@fsi.com'),

    /**
     * iv: Your iv key from fsi.
     *
     */
    'iv' => env('FSI_IV', 'NA@td*oeP:$i#4WD'),

    /**
     * key: Your key from fsi.
     *
     */
    'key' => env('FSI_KEY', ':Uq!QI9S!n:plg1A')

];