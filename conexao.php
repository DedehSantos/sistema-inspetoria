<?php

$servidor = "sql309.epizy.com";
$dbusuario = "epiz_31970476";
$dbsenha = "xzhQazxgrpT";
//inserir o nome do banco de dados
$dbname = "epiz_31970476_inspetoria";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
 
if ($conn){
   // echo "Coxexão OK";
} else{
    echo "Conexão com o banco Falhou";
}
?>
