<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/add/album' => [[['_route' => 'addAlbum', '_controller' => 'App\\Controller\\AddingController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|dd/album/([^/]++)(*:64)'
                    .'|lbum/([^/]++)(*:84)'
                .')'
                .'|/delete/album/([^/]++)(*:114)'
                .'|/fav/([^/]++)(*:135)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'editAlbum', '_controller' => 'App\\Controller\\AddingController::index'], ['id'], null, null, false, true, null]],
        84 => [[['_route' => 'album', '_controller' => 'App\\Controller\\AlbumDetailsController::index'], ['id'], null, null, false, true, null]],
        114 => [[['_route' => 'delAlbum', '_controller' => 'App\\Controller\\AddingController::delete'], ['id'], null, null, false, true, null]],
        135 => [
            [['_route' => 'fav', '_controller' => 'App\\Controller\\FavoritesController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
