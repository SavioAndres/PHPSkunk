<?php

namespace App\Operator;

use App\Model\Database\Crud;

class Teste
{
    public static function obter() : array
    {
        $crud = new Crud('testando');
        return $crud->read(1);
    }

    public static function inserir()
    {
        if(isset($_POST['enviar'])) {
            $crud = new Crud('testando');
            $obj = new StdClass();
            $obj->nome = $_POST['nome'];
            $obj->sobrenome = $_POST['sobrenome'];
            $crud->create($obj);
        }
    }

}