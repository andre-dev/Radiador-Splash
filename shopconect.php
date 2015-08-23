<?php
session_start();
require_once('conectar.php');
$antigo_prod  = $_POST['antigo_produto'];
$novo_prod  = $_POST['novo_produto'];
$desc = $_POST['desc'];
$btn = $_POST['btn'];
$nome_temporario=$_FILES["img"]["tmp_name"]; 
$foto = $_FILES['img']['name'];
copy($nome_temporario,"img/$foto"); 

mysql_select_db($nome_banco,$conexao);

$sql = "SELECT nm_produto from shop where nm_produto = '$antigo_prod'";
$sql2 = mysql_query($sql, $conexao)or die(mysql_error());
  if( mysql_num_rows( $sql2 ) > 0){
$sql = "UPDATE shop SET nm_produto = '$novo_prod', ds_img = '$foto', ds_produto = '$desc', cd_btn = '$btn' WHERE nm_produto = '$antigo_prod'";

$sql2 = mysql_query($sql, $conexao)or die(mysql_error()); 
 echo "<script>if(window.confirm('Alteração efetuada')) { window.location='adm.php';} else { window.close () } </script>";
//header('location:adm.php');
 }else{
	  echo "<script>if(window.confirm('Produto Incorreto')) { window.location='adm.php';} else { window.close () } </script>";
  }
session_start();
$_SESSION["nome"] = $nome;
$_SESSION["senha"] = $senha;
?>