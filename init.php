<?php
    session_start();
    
     spl_autoload_register(function ($class) {
        require_once __DIR__. '/classes/' . $class . '.php';
    });


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

