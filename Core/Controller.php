<?php

namespace Core;

abstract class Controller {

    public function render(string $file, array $params = []) {
        $filePath = ROOT_PATH . "Views" . DIRECTORY_SEPARATOR . $file . ".php";

        foreach ($params as $name => $value) {
            ${$name} = $value;
        }
        unset($params);
        $view = $filePath;

        include ROOT_PATH . "theme" . DIRECTORY_SEPARATOR . 'main.php';
    }

}
