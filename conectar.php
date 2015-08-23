<?php  

/*Este script conecta um banco de dados MySQL conforme os parâmetros enviados*/
$servidor="banda.mysql.uhserver.com";
$nome_banco="banda";
$usuario="radiador";
$senha="q1!w2@";
//Conectando ao servidor MySQL
if(!($conexao= mysql_connect($servidor,$usuario,$senha)))
{
       echo"<p align=\"center\"><big><strong>Não foi possível conectar-se ao 
       MySQL.Por favor entre em contato com o Adiministrador do Sistema!!!!</
       strong></big></p>";
                 exit;
       
}
else
  /*echo"<p align=\"center\"><big><strong>Conexão com a Base de dados do Mysql
  $nome_banco estabelecida com sucesso!!!</
       strong></big></p>";*/
       //Selecionando a Base de Dados
  if(!($conectando=mysql_select_db($nome_banco,$conexao)))  
  {
   echo"<p align=\"center\"><big><strong>Não foi possível estabelecer uma conexão com a
   base de dados do MySQL $nome_banco.Por favor entre em contato com o Adiministrador do Sistema!!!!</
       strong></big></p>";
                 exit;
  }    
?>