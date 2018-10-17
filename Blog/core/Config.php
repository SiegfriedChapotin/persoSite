<?php
/**
 * Created by PhpStorm.
 * User: siegf_000
 * Date: 15/10/2018
 * Time: 11:51
 */

namespace Core;



/*
 * singleton base de données
 */
class Config
{
    private $settings=[];
    private static $_instance;

    public static function getInstance($file){
        if(is_null(self::$_instance)){
            self::$_instance = new Config($file);

        }
        return self::$_instance;
    }

    /**
     * Config constructor.
     */
    public function __construct($file){

        $this-> settings = require($file);
}

    public function get($key){
        if(!isset($this->settings[$key])){
            return null;
    }
        return $this->settings[$key];
}
}