<?php

spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/';

    if (strpos($class, 'Application\\') === 0) {

        $class = substr($class, strlen('Application\\'));

        $classPath = str_replace('\\', '/', $class);

        $filePath = $baseDir . $classPath . '.php';

        if (file_exists($filePath)) {
            require_once $filePath;
        }
    }
});
