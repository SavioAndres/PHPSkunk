<?php

function include_template() : void
{
    $args = func_get_args();

    foreach ($args as $value) {
        $path = '../templates/' . $value;
        if (file_exists($path)) {
            include_once $path;
        } elseif (file_exists($path . '.php')) {
            include_once $path . '.php';
        } elseif (file_exists($path . '.html')) {
            include_once $path . '.html';
        } else {
            throw new Exception($path . ' template not found', 1);
        }
    }
}
