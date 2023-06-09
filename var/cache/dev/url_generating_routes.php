<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'addAlbum' => [[], ['_controller' => 'App\\Controller\\AddingController::index'], [], [['text', '/add/album/']], [], [], []],
    'editAlbum' => [['id'], ['_controller' => 'App\\Controller\\AddingController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add/album']], [], [], []],
    'delAlbum' => [['id'], ['_controller' => 'App\\Controller\\AddingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete/album']], [], [], []],
    'album' => [['id'], ['_controller' => 'App\\Controller\\AlbumDetailsController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/album']], [], [], []],
    'fav' => [['id'], ['_controller' => 'App\\Controller\\FavoritesController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/fav']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
