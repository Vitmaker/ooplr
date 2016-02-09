<?php

class DB
{
    private $_instance = null;
    private $_pdo,
        $_query,
        $_error = false,
        $_result,
        $_count = 0;

    public function __construct()
    {
        try{
            $this->_pdo = new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db').';', Config::get('mysql/user'), Config::get('mysql/password'));
            echo "Access!";
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

/**
 * @param $_pdo Make conection to DB
 * @return object
 */
    public static function getInstance()
    {
        if(!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
}