<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/order/list' => [[['_route' => 'app_order_list', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/list' => [[['_route' => 'app_user_list', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/order/(?'
                    .'|([^/]++)(*:60)'
                    .'|new(*:70)'
                    .'|([^/]++)/edit(*:90)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:115)'
                    .'|new(*:126)'
                    .'|([^/]++)(?'
                        .'|/edit(*:150)'
                        .'|(*:158)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'app_order_fin', '_controller' => 'App\\Controller\\OrderController::find'], ['email'], ['GET' => 0], null, false, true, null]],
        70 => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\OrderController::new'], [], ['POST' => 0], null, false, false, null]],
        90 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        115 => [[['_route' => 'app_user_find', '_controller' => 'App\\Controller\\UserController::find'], ['id'], ['GET' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_user_create', '_controller' => 'App\\Controller\\UserController::new'], [], ['POST' => 0], null, false, false, null]],
        150 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['PUT' => 0], null, false, false, null]],
        158 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
