<?php

namespace App\Operator;

interface Skunk
{
    public static function variables() : array;
    public static function content() : void;
}