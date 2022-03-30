<?php
if (PHP_MAJOR_VERSION < 8){
    die("Need PHP version >= 8");
}
require_once dirname(__DIR__) . '/config/init.php';

new \prj\App();

throw new Exception('Error', 404);
//echo $test;