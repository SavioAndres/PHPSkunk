<?php
require_once '../../vendor/autoload.php';
use App\Operator\Teste;

extract(Teste::obter());
Teste::inserir();
define('TITLE', 'y');

include_template('head', 'nav', 'header', 'aside');
?>
    <p>ID: <?=$id?></p>
    <p>Nome: <?=$nome?></p>
    <p>Sobrenome: <?=$sobrenome?></p>
    <hr/>
    <form method="post">
        <input type="text" name="nome"/>
        <input type="text" name="sobrenome"/>
        <input type="submit" name="enviar"/>
    </form>
<?php
include_template('footer');