<?php

define("ROOT_PATH", __DIR__ . DIRECTORY_SEPARATOR);

include ROOT_PATH . "config" . DIRECTORY_SEPARATOR . "const.php";

// Should use composer to autoload
spl_autoload_register(function(string $className) {
//    $namespace = str_replace("\\", DIRECTORY_SEPARATOR, __NAMESPACE__);
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $classFile = ROOT_PATH . DIRECTORY_SEPARATOR . $className . ".php";

    if (file_exists($classFile)) {
        require_once $classFile;
    } else {
        error_log("Class {$className} not found in {$classFile}");
    }
});
