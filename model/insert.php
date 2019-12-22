<?php

namespace Model;

use Model\Database\Connect;

class Insert extends Connect
{

    public function __construct()
    {
        die('Error');
    }

    public function ins()
    {
        $conn = parent::connect();
        return $conn;
    }

}

$vai = new Insert();
var_dump($vai->ins());