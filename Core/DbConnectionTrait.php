<?php

namespace Core;

trait DbConnectionTrait {

    protected $pdo;

    public function setPdo() {
        $this->pdo = MySQLDatabase::getInstance()->getConnection();
    }

    public function getPdo(): \PDO {
        return $this->pdo;
    }

}
