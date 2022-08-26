<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/user/list' => [[['_route' => 'app_user_list', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/user/(?'
                    .'|([^/]++)(*:59)'
                    .'|new(*:69)'
                    .'|([^/]++)(?'
                        .'|/edit(*:92)'
                        .'|(*:99)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'app_user_find', '_controller' => 'App\\Controller\\UserController::find'], ['id'], ['GET' => 0], null, false, true, null]],
        69 => [[['_route' => 'app_user_create', '_controller' => 'App\\Controller\\UserController::new'], [], ['POST' => 0], null, false, false, null]],
        92 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        99 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
