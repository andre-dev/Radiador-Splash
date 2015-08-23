<?php

session_start();

require_once('conectar.php');

$dia  = $_POST['dia'];

$mes = $_POST['mes'];

$estab = $_POST['estab'];

$local = $_POST['local'];

$hora = $_POST['time'];

$tel = $_POST['tel'];

$link = $_POST['link'];



mysql_select_db($nome_banco,$conexao);



$sql = "Insert into agenda(dt_dia, dt_mes, nm_lugar, nm_end,hr_horario, cd_tel, nmInfo) Values('$dia', '$mes', '$estab', '$local', '$hora', '$tel', '$link' );";



$sql2 = mysql_query($sql, $conexao)or die(mysql_error()); 

if($sql2){

echo "incluido com sucesso";

}else{

echo "falha ao incluir os dados";

}

header('location:adm.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Documento sem título</title>

</head>

<?php 

session_start();

$_SESSION["nome"] = $nome;

$_SESSION["senha"] = $senha;

echo '<a href="adm.php">Voltar</a>';

?>

<body>



</body>

</html>