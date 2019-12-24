<?php
include_once '../../model/database/crud.php';
class Teste
{
    public static function obter() : array
    {
        $crud = new App\Model\Database\Crud('testando');
        return $crud->read(1);
    }

    public static function inserir()
    {
        if(isset($_POST['enviar'])) {
            $crud = new App\Model\Database\Crud('testando');
            $obj = new StdClass();
            $obj->nome = $_POST['nome'];
            $obj->sobrenome = $_POST['sobrenome'];
            $crud->create($obj);
        }
    }

}