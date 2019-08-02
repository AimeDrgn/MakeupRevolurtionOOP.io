<?php

namespace Core;

use Core\Router;
use Core\MySQLDatabase;

class Application {

    protected $config;
    protected static $app = null;

    private function __construct(array $config = []) {
        $this->config = $config;
    }

    public static function getInstance(array $config = []) {
        if (null === self::$app) {
            self::$app = new self($config);
        }
        return self::$app;
    }

    public function getConfig(string $name) {
        return $this->config[$name];
    }

    public function run() {
        // register routes.
        $this->registerRoutes($this->getConfig('routes'));

        // db connection
        $this->registerDb($this->getConfig('db'));

        Router::execute($_SERVER['REQUEST_URI']);
    }

    protected function registerDb(array $dbConfig) {
        switch ($dbConfig['type']) {
            case "mysql":
            default:
                MySQLDatabase::getInstance($dbConfig);
                break;
        }
    }

    protected function registerRoutes(array $routes): void {
        foreach ($routes as $pattern => $callback) {
            Router::route($pattern, $callback);
        }
    }

    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

}
