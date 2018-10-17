<?php

namespace App;

class Autoloader
{

    /**
     * Enregistre notre autoloader
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class_name)
    {
        // Uniquement si présent dans notre namespace
        if (strpos($class_name, __NAMESPACE__ .  '\\') === 0) {
            $class_name = str_replace(__NAMESPACE__ . '\\','', $class_name);
            $class_name = str_replace('\\','/', $class_name);
            require __DIR__ . '/' . $class_name . '.php';
        }
        
    }

}



