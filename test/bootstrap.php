<?php

spl_autoload_register(function ($class) {
    if (strpos($class, "Antlr\Runtime") !== false) {
        require __DIR__ . "/../runtime/Php/" . 
        str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
    }
});