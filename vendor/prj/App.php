<?php

namespace prj;

class App
{
    public static $app;
    
    public function __construct() {
        
        new ErrorHandler();
        
        self::$app = Registry::getInstance();
        $this->getParams();
    }
    
    public function getParams() {
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProperty($key, $value);
            }
        }
    }
}