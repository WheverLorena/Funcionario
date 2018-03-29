<?php
$res = 0;    
$v1 = $_POST['valorUm'];
$v2 = $_POST['valorDois'];
$v3 = $_POST['valorTres'];





function soma($valor1,$valor2,$valor3){

    $res = $valor1+$valor2+$valor3;
    echo ("resultado da soma é: $res");
return $res;
   
}

soma($v1,$v2,$v3);

?>