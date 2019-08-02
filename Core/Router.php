<?php

namespace Core;

class Router {

    private static $routes = [];

    private function __construct() {
        
    }

    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

    public static function route(string $pattern, $callback) {
        $pattern = '/^' . str_replace("/", "\/", $pattern) . '$/';
        self::$routes[$pattern] = $callback;
    }

    public static function execute(string $url) {
        foreach (self::$routes as $pattern => $callback) {
//            var_dump($pattern);
//            var_dump($url);
//            var_dump(preg_match($pattern, $url));
            if (preg_match($pattern, $url, $params)) {
                array_shift($params);
                return call_user_func_array($callback, array_values($params));
            }
        }
        return call_user_func(
                function() {
                    return (new \Controllers\DefaultController())->notfound();
                }
        );
    }

}
