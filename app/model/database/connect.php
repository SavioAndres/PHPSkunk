<?php

namespace App\Model\Database;

abstract class Connect
{

    private static $HOST = DATABASE['host'];
    private static $NAME = DATABASE['dbname'];
    private static $USER = DATABASE['username'];
    private static $PASS = DATABASE['password'];

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
