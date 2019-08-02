<?php

namespace Core;

use \PDO;

class MySQLDatabase implements DatabaseInterface {

    private $conn;
    private static $instance = null;

    private function __construct(array $config) {
        $dsn = "mysql:host={$config['host']};dbname={$config['database']};charset=utf8mb4";
        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $config['options'] ?? []);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            die("Error connection to db: " . $e->getMessage());
        }
    }

    public static function getInstance(array $config = []): self {
        if (self::$instance == null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function getConnection() : \PDO {
        return $this->conn;
    }

}
