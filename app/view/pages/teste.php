<?php
include_once '../../operator/teste.php';
extract(Teste::obter());
Teste::inserir();
define('TITLE', 'y');

include_once '../templates/head.php';
include_once '../templates/nav.php';
include_once '../templates/header.php';
include_once '../templates/aside.php';
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
include_once '../templates/footer.php';