<?php 


class Singletone {
    private static $instance;
    private $prop;
    private function __construct() {}

    public static function getInstance($config = null)
    {
        if(self::$instance === null){
           self::$instance = new Singletone();
           self::$instance->prop = $config['prop'];
        }

        return self::$instance;
    }



}