<?php

namespace Model;

class Database
{

    private static $HOST = '';
    private static $NAME = '';
    private static $USER = '';
    private static $PASS = '';

    private static $conn = null;

    public function __construct()
    {
        die('Error');
    }

    public static function connect()
    {
        try {
            self::$conn = new PDO('mysql:host=' . self::$HOST . ';dbname=' . self::$NAME, self::$USER, self::$PASS);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch(PDOException $exception) {
            die($exception->getMessage());
        }
    }

}