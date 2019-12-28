<?php
require_once '../../vendor/autoload.php';
use App\Operator\Teste as T;
//extract();
$list = T::variables();
T::content();
include_template('head', 'nav', 'header', 'aside');
?>
<main class="container">
<table>
        <thead>
          <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Sobrenome</th>
              <th>Excluir</th>
          </tr>
        </thead>

        <tbody>
        
        <?php
            $n = count($list);
            for ($i=0; $i < $n; $i++) {
        ?>
            <tr>
                <td><?=$list[$i]['id']?></td>
                <td><?=$list[$i]['nome']?></td>
                <td><?=$list[$i]['sobrenome']?></td>
                <td><button class="btn" onclick="formDelete('<?=$list[$i]['id']?>');"><i class="material-icons">delete</i></button></td>
            </tr>
        <?php } ?>
            <tr>
                <td id="retr"></td>
            <tr>
        </tbody>
      </table>
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
            <a onclick="formInsert(primeiroform); M.toast({html: 'Enviado com sucesso'})" class="btn">Enviar</a>
        </form>
    </div>
    <span id="cont">
    </span>
    <button onclick="refrex();">refrex</button>
</main>
<!--
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function refrex() {
    $(document).ready(function (){
        $.post('hg', function(retorna){
            $("#cont").html(retorna);
        });
    });
}
</script>
-->
<?php
include_template('footer');