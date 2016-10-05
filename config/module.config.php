<?php
namespace Progama;
return [
    'router' => [
        'routes' => [
             "progama" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/progama",
                    "defaults" => [
                        "__NAMESPACE__" => "Progama\Controller",
                        "controller" => "Progama",
                        "action" => "index",
                    ],
                ],
                "may_terminate" => true,
                "child_routes" => [
                    "default" => [
                        "type" => "Segment",
                        "options" => [
                            "route" => "/[:controller[/:action][/:id][/:page]]",
                            "constraints" => [
                                "controller" => "[a-zA-Z][a-zA-Z0-9_-]*",
                                "action" => "[a-zA-Z][a-zA-Z0-9_-]*",
                            ],
                            "defaults" => [
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
