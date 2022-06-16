<?php include_once("conexao.php"); 


//incluir a conexao


$busca = $_GET['busca'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, 'utf8');
//inserir o nome da tabela onde esta tblista_de_alunos e onde tem matricula, inserir o nome do que quer buscar                   
$sql = " SELECT * FROM lista_de_alunos_2022 WHERE matricula = '$busca' ";
$result = mysqli_query($conn, $sql);
$conta = mysqli_num_rows($result);
while ($linha = mysqli_fetch_array($result)) {
  $matricula = $linha['matricula'];
  $nome = $linha['nome'];
  $turma = $linha['turma'];
  $curso = $linha['curso'];
}

if ($conn) {
  //echo 'conexao ok';
} else {
  echo 'conexao falhou';
}

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
    <h2>Gerar ocorrência</h2>
    <label>Nome:</label>
    <input class="input-busca" type="text" value="<?php echo "$nome"; ?>" name="nome" readonly >
    <label>Matricula:</label>
    <input class="input-busca" type="text" value="<?php echo "$matricula"; ?>" name="matricula" readonly >
    <label>Serie:</label> 
    <input class="input-busca" type="text " value="<?php echo "$turma"; ?>" name="turma" readonly >
    <label>Curso:</label> 
    <input class="input-busca" type="text" value="<?php echo "$curso"; ?>" name="curso" readonly>
    <input class="input-busca" type="text" value="<?php echo "$hora_da_ocorrencia"; ?>" name="hora_da_ocorrencia" hidden >
    <input class="input-busca" type="text" value="<?php echo "$data_da_ocorrencia"; ?>" name="data_da_ocorrencia" hidden >
    <label>Descrição da ocorrência:</label> 
    <textarea class="form-control" id="exampleFormControlTextarea1" value="<?php echo" $ocorrencia"; ?> " rows="3"  name="ocorrencia" ></textarea>
    <button type="submit" class="btn btn-success mt-3">CONFIRMAR OCORRÊNCIA</button>
   
  </form>

</body>

</html>