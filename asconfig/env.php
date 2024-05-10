<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['template'] = [
    [
        'name' => 'velzon',
        'path' => 'velzon',
        'active' => false
    ]
];

$config['languages'] = [
    [
        'code' => 'id',
        'icon' => '',
        'active' => true
    ],
    [
        'code' => 'en',
        'icon' => '',
        'active' => false
    ]
];

$config['env'] = [
    'minify' => false,
    /** Permission Section */
    'master' => true,
    'schema' => 'tapi',

    /** Template Section */
    'admin_template'  => 'velzon',
    'isHasPublic' => false,
    'public_template'  => 'hud',

    /** Language Section */
    'language' => 'id',

    /** Domain List */
    'DomainList' => [
        'localhost',
        '127.0.0.1',
        'dev.inalum.id'
    ],

    'OnlyIndonesia' => false,

    /** API Environment */
    'API_HOST' => 'http://localhost/esb-api/',
    'API_TOKEN' => 'dOhAYpyz2gYqpbsulmeehAwyNaB1xfedrdlrV1fHefeIwuc7kM0bPtdgcQG2kfk3q',
    'API_APP_KEY' => '7f306337-41fb-52d1-8169-b799d04045f7',
    'API_USERNAME' => '',
    'API_PASSWORD' => ''
];
