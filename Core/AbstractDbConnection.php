<?php

namespace Core;

/**
 * Description of AbstractDbConnection
 *
 * @author training
 */
abstract class AbstractDbConnection {

    use DbConnectionTrait;
    public function __construct() {
        $this->setPdo();
    }
}
