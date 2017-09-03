<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
    "/type/show/:int",
    [
        "controller" => "type",
        "action" => "show",
        "id" => 1,
    ]
);

$router->handle();
