<?php include_once"conexao.php"; ?>
<?php
//recebe os dados vindo do formulario e armazena nas variaves
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$curso = $_POST['curso'];
$hora_da_ocorrencia = $_POST['hora_da_ocorrencia'];
$data_da_ocorrencia = $_POST['data_da_ocorrencia'];
$ocorrencia =  $_POST['ocorrencia'];


    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); 
    mysqli_set_charset($conn, "utf8");
    $sql = "INSERT INTO  ocorrencias (matricula, nome, turma, curso, hora_da_ocorrencia,  data_da_ocorrencia, ocorrencia) VALUES('$matricula', '$nome', '$turma', '$curso', '$hora_da_ocorrencia','$data_da_ocorrencia', '$ocorrencia' )";
    
    if (mysqli_query($conn, $sql)) {
        echo '<script language="javascript">';   
        echo 'alert("Ocorrencia gerada com sucesso!");';
        echo 'location.href="index.php";';    
        echo '</script>';
        
    } else {
        echo "Deu Erro " . $sql . "<br>" . mysqli_error($conn);
   
}
mysqli_close($conn);

?>