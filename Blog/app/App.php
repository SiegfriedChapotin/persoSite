<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



use Core\Config;
use Core\Database\MysqlDatabase;

/**
 * Description of App
 *
 * @author siegf_000
 */
class App
{

    public $title = 'Le Preum\'s';

    private $db_instance;
    /**
     * @var object
     */
    private static $_instance;

    /**
     * Récupére l'instance
     * @return object
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }


    /**
     * Débute la session, require et charge l'autoloader
     * @return [type] [description]
     */
    public static function load()
    {
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }

    /**
     * Factory qui initialise un nouvel objet en lui passant la connexion à la base de données
     * @param  string $name
     * @return object
     */
    public function getTable($name)
    {
        $class_name = '\\App\\Model\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    /**
     * Factory qui initialise la connexion à la base de données
     * @return object
     */
    public function getDb()
    {
        $config = Config::getInstance(ROOT . '/Config/config.php');
        if (is_null($this->db_instance)) {
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

}