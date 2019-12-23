<?php

namespace Model\Database;

abstract class Connect
{

    private static $HOST = 'localhost';
    private static $NAME = 'test';
    private static $USER = 'root';
    private static $PASS = '';

    private static $instance = null;

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
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            die($exception->getMessage());
        }
    }

}
