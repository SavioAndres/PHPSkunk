<?php
require_once '../../vendor/autoload.php';
use App\Operator\Teste as T;
//extract();
header('Content-Type: application/json');
$list = T::variables();
$re = json_encode($list);
$n = count($list);
//for ($i=0; $i < $n; $i++) { 
//    echo $list[$i]['nome'] . ' - ' . $list[$i]['sobrenome'] . '<br>';
//}
echo $re;