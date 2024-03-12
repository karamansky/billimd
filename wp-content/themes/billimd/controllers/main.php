<?php

if( !defined( 'ABSPATH' ) ) exit;

$controllers_path = get_stylesheet_directory().'/controllers/';
$controllers = [
    'Admin'        => [
        'Settings'
    ],
    'Menu'         => [
        'RegisterCustom'
    ],
    'Display'      => [
        'DisplayGlobal',
        'DisplayBreadcrumbs',
        'GutenbergBlocks'
    ],
    'Enqueue'      => [
        'EnqueueFiles'
    ],
    'Posts'        => [
        'RegisterCustom'
    ],
    'Taxonomies'   => [
        'RegisterCustom',
        'TaxonomiesQuery'
    ],
    'Forms'   => [
        'CF7',
    ],
];

foreach( $controllers as $key => $controller ) {
    foreach( $controller as $class ) {
        require_once $controllers_path.$key.'/'.$class.'.php';
    }
}