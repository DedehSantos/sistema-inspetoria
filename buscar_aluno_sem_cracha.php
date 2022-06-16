<?php include_once("conexao.php"); 



$unixTime = time();
$timeZone = new \DateTimeZone('America/Sao_Paulo');
$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone);
$hora_da_ocorrencia = $time->format(' H:i:s');
$data_da_ocorrencia =  $time->format('Y/m/d ');

$ocorrencia = '';
?>



<!doctype html>
<html lang="en">

<head>
  <title>BUSCAR ALUNO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="css/buscar.css">
</head>

<body>


  <form  class="form-busca-aluno"  method="POST" action="enviar_para_banco.php">
    <label>Nome:</label>
    <input class="input-busca" type="text" value="" name="nome"  placeholder="Nome do aluno">

    <label>Turma:</label> 
    <input class="input-busca" type="text " value="" name="turma" placeholder="Turma do Aluno" >
    <label>Curso:</label> 
    <input class="input-busca" type="text" value="" name="curso" placeholder="Curso do aluno" >
    <input class="input-busca" type="text" value="<?php echo "$hora_da_ocorrencia"; ?>" name="hora_da_ocorrencia" hidden >
    <input class="input-busca" type="text" value="<?php echo "$data_da_ocorrencia"; ?>" name="data_da_ocorrencia" hidden >
  
    <label>Descrição da ocorrência:</label> 
    <textarea class="form-control" id="exampleFormControlTextarea1" value="<?php echo "$ocorrencia"; ?>" rows="3"  name="ocorrencia" ></textarea>
    <button type="submit" class="btn btn-success mt-3">CONFIRMAR OCORRÊNCIA</button>
   
  </form>

</body>

</html>