<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Basic Site Information
    |--------------------------------------------------------------------------
    | 
    | When you set up the CMS initially, you will want to update the following
    | array with the appropriate values. Think of these as site globals.
    | 
    */
    
    'site' => [
        'name' => 'ArtisanCMS',
        'description' => 'A Laravel based CMS',
        'logo' => '',
        'url' => env('APP_URL'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Social Links
    |--------------------------------------------------------------------------
    | 
    | Most sites link to social profiles, this array can be updated with the 
    | appropriate links, then used throughout the site. Can add more networks
    | than the listed, just may not work in every theme.
    | 
    */

    'social' => [

        'facebook' => '',
        'twitter' => 'https://twitter.com/artisancms',
        'google' => '',

    ]
];
