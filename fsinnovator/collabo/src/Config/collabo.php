<?php

return [

    /*
    |--------------------------------------------------------------------------
    | collabo fsi keys and url variables
    |--------------------------------------------------------------------------
    |
    | The variables for collabo fsi keys and url .env file
    |
    */

    /**
     * authorization_url: Your url to get authorization token. As gottten when signing up on fsi / collabo plartform
     *
     */
    'authorization_url' => env('FSI_AUTHORIZATION_URL', 'http://94.250.201.163:9292/fsi-gateway/api/auth/sys-login'),

    /**
     * base_url: Your base url. As gottten when signing up on fsi / collabo plartform
     *
     */
    'base_url' => env('FSI_BASE_URL', 'http://94.250.201.163:9292/fsi-gateway/api'),

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