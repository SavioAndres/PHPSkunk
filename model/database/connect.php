<?php

namespace Model\Database;

abstract class Connect
{

    private $HOST = 'localhost';
    private $NAME = 'test';
    private $USER = 'root';
    private $PASS = '';

    private static $instance = null;

    public function __construct()
    {
        die('Error');
    }

    protected static function connect()
    {
        if (!isset(self::$instance)) {
            self::sqlConn();
        }
        return self::$instance;
    }

    protected static function close()
    {
        die();
    }

    private static function sqlConn()
    {
        try {
            $sql = 'mysql:host=' . self::$HOST . ';dbname=' . self::$NAME . ';charset=utf8';
            self::$instance = new \PDO($sql, self::$USER, self::$PASS);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            die($exception->getMessage());
        }
    }

}
