<?php
require_once '../../vendor/autoload.php';
use App\Operator\Teste as T;
extract(T::variables());
T::content();
include_template('head', 'nav', 'header', 'aside');
?>
    <div class="container">
        <p>ID: <?=$id?></p>
        <p>Nome: <?=$nome?></p>
        <p>Sobrenome: <?=$sobrenome?></p>
        <div class="row">
            <form method="post" id="primeiroform" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate" name="nome"/>
                        <label for="first_name">Primeiro nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate" name="sobrenome"/>
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>
                <a onclick="insert(primeiroform); M.toast({html: 'Enviado com sucesso'})" class="btn">Enviar</a>
            </form>
        </div>
    </div>
<?php
include_template('footer');