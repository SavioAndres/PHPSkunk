<?php

namespace App\Operator;

use App\Model\Database\Crud;

class Teste implements Skunk
{
    public static function variables(): array
    {
        return self::obter();
    }

    public static function content(): void
    {
        define('TITLE', 'y');
        self::inserir();
        self::delete();
    }

    private function obter(): array
    {
        $crud = new Crud('testando');
        return $crud->read(1);
    }

    private function inserir(): void
    {
        if(isset($_POST['nome'])) {
            $crud = new Crud('testando');
            //$obj = new \StdClass();
            //$obj->nome = $_POST['nome'];
            //$obj->sobrenome = $_POST['sobrenome'];
            $obj = array(
                'nome' => $_POST['nome'],
                'sobrenome' => $_POST['sobrenome']
            );
            //var_dump($obj);
            $crud->createBySendingArray($obj);
            
        }
    }

    private function delete(): void
    {
        echo "<script>console.log('i');</script>";
        if (isset($_POST['inpdelete'])) {
            echo "<script>console.log('fech');</script>";
            $crud = new Crud('testando');
            $crud->delete($_POST['inpdelete']);
        }
    }

}