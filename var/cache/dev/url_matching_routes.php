<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/video' => [[['_route' => 'admin_video', '_controller' => 'App\\Controller\\AdminController::adminVideos'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user', '_controller' => 'App\\Controller\\AdminController::adminUsers'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/video/upload' => [[['_route' => 'upload_video', '_controller' => 'App\\Controller\\VideoController::uploadVideo'], null, null, null, false, false, null]],
        '/subscription' => [[['_route' => 'subscription', '_controller' => 'App\\Controller\\VideoController::subscription'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\VideoController::home'], null, null, null, false, false, null]],
        '/trend' => [[['_route' => 'trend', '_controller' => 'App\\Controller\\VideoController::trend'], null, null, null, false, false, null]],
        '/discover' => [[['_route' => 'discover', '_controller' => 'App\\Controller\\VideoController::discover'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|video/([^/]++)(*:192)'
                    .'|user/(?'
                        .'|edit/([^/]++)(*:221)'
                        .'|delete/([^/]++)(*:244)'
                    .')'
                    .'|([^/]++)/video(*:267)'
                    .'|comment/delete/([^/]++)/([^/]++)(*:307)'
                .')'
                .'|/s(?'
                    .'|earch/([^/]++)(*:335)'
                    .'|ubscribe/([^/]++)/([^/]++)(*:369)'
                .')'
                .'|/comment/create/([^/]++)(*:402)'
                .'|/u(?'
                    .'|ser/([^/]++)(*:427)'
                    .'|nsubscribe/([^/]++)/([^/]++)(*:463)'
                .')'
                .'|/video/(?'
                    .'|([^/]++)(*:490)'
                    .'|delete/([^/]++)/([^/]++)(*:522)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:585)'
                    .'|([A-z0-9_-]*)/(.+)(*:611)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'admin_video_show', '_controller' => 'App\\Controller\\AdminController::adminGetVideo'], ['param'], null, null, false, true, null]],
        221 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\AdminController::adminEditUser'], ['param'], null, null, false, true, null]],
        244 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::adminDeleteUser'], ['param'], null, null, false, true, null]],
        267 => [[['_route' => 'admin_video_user', '_controller' => 'App\\Controller\\AdminController::adminVideosByUser'], ['param'], null, null, false, false, null]],
        307 => [[['_route' => 'admin_delete_comment', '_controller' => 'App\\Controller\\AdminController::adminDeleteComment'], ['param', 'uuid'], null, null, false, true, null]],
        335 => [[['_route' => 'search_idea', '_controller' => 'App\\Controller\\BaseController::searchIdea'], ['param'], null, null, false, true, null]],
        369 => [[['_route' => 'subscribe', '_controller' => 'App\\Controller\\UserController::subscribe'], ['param', 'location'], null, null, false, true, null]],
        402 => [[['_route' => 'create_comment', '_controller' => 'App\\Controller\\CommentController::addComment'], ['param'], null, null, false, true, null]],
        427 => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::viewProfile'], ['param'], null, null, false, true, null]],
        463 => [[['_route' => 'unsubscribe', '_controller' => 'App\\Controller\\UserController::unsubscribe'], ['param', 'location'], null, null, false, true, null]],
        490 => [[['_route' => 'watch_video', '_controller' => 'App\\Controller\\VideoController::getVideo'], ['param'], null, null, false, true, null]],
        522 => [[['_route' => 'delete_video', '_controller' => 'App\\Controller\\VideoController::deleteVideo'], ['param', 'location'], null, null, false, true, null]],
        585 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        611 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
