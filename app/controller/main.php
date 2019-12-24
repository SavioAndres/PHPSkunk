<?php

namespace Controller;

class Main
{
    public function __construct()
    {
        echo 'Deu certo';
    }

    public function vai()
    {
        echo 'ss';
    }

}
        $questionMark = '';
        $countValues = 0;
        for ($i=0; $i < $countValues - 1; $i++) { 
            $questionMark .= '?,';
        }
        echo $countValues > 0 ? $questionMark . '?<br>' : '';
        //echo $questionMark . '?<br>';
        //echo substr($questionMark, 0, -1).'<br>';
        $columns = ['*'];
        $columns = implode(',', $columns);
        echo $columns;
        include_once 'model/database/crud.php';
        $crud = new Crud('testando');
        $crud->insert(['nome', 'sobrenome'], ['essenome', 'segundoessenome']);