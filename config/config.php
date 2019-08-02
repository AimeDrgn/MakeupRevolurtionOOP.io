<?php

return [
    "name" => "Makeup Revolution",
    "description" => "My webpage",
    "base_url" => "http://makeuprevolution.local:8080",
    "db" => [
        "type" => "mysql",
        "host" => "localhost:3306",
        "database" => "makeuprevolution",
        "username" => "root",
        "password" => "",
    ],
    "routes" => require ROOT_PATH . 'config'. DIRECTORY_SEPARATOR. 'routes.php'
];