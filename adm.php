<?php
session_start();
if( (!isset($_SESSION['nome'])) and (!isset($_SESSION['senha']))) {
	session_destroy(); 
    unset ($_SESSION['nome']);
    unset ($_SESSION['senha']);	
	header('Location: login.php'); 
}
?>
<!DOCTYPE html>
<html lang="pt-br"
<head>
<meta charset="utf-8">
<title>Radiador Splash</title>

  <meta charset="utf-8">
  <title>Radiador Splash</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Banda de Mpb, rock e flash back.">
  <meta name="keywords" content="RADIADORSPLASH, radiadorsplash, RadiadorSplash, Radiador Splash, Radiador splash, Radiador, Splash, Banda, Mpb, mpb, Banda Mpb, Bamda mpb, rock, Rock, anos 80, anos 70, anos 90, Santos, santos, Baixada Santista, Santista.>
  <meta name="author" content="www.amrinfo.com">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="imgTitle.jpg">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script>
   $(main);
   $(validar);
    function main(){
	 $("#gravar").click(function(){	
	  	if($("#mes").val() == ""){
			alert("Campo em branco");
			$("#mes").focus();
			return false;
		}		
		if($("#estab").val() == ""){
			alert("Campo em branco");
			$("#estab").focus();
			return false;
		}
		if($("#local").val() == ""){
			alert("Campo em branco");
			$("#local").focus();
			return false;
		}
		if($("#time").val() == ""){
			alert("Campo em branco");
			$("#time").focus();
			return false;
		}else{
		   var texto = $("#time").val();
		   var hora = texto.substring(0,2);
		   var seg = texto.substring(3,5);
		   if((hora>23)||(hora<0)){
			  alert("Hora incorreta");
			 $("#time").focus();
			 $("#time").val("");
			 return false; 
		   }else{
			   if((seg>59)||(seg<0)){
			   alert("Segundos incorreto");
			   $("#time").focus();
			   $("#time").val("");
			   return false;
			  }
			}
		}
		if($("#dia").val() == ""){
			alert("Campo em branco");
			$("#dia").focus();
			return false;   
		}else{
		    if((parseInt($("#dia").val()) < 1 )||(parseInt($("#dia").val())) > 31){
				alert("Dia inválido");
				$("#dia").focus();
				$("#dia").val();
				return false;
			}else{
			alert("Dados Enviados");
			return true;
			}
		}
	});
}
   function validar(){
	 $("#alterar").click(function(){
		 if($("#antigo_produto").val() == ""){
		   alert("Campo vazio");
		   $("#antigo_produto").focus();
		   return false; 
		}
		if($("#novo_produto").val() == ""){
			alert("Campo vazio");
		   $("#novo_produto").focus();
		   return false;
		}
		if($("#img").val() == ""){
		   alert("Campo vazio");
		   $("#img").focus();
		   return false;
		}
		if($("#desc").val() == ""){
		  alert("Campo vazio");
		  $("#desc").focus();
		  return false;	
		}
		if($("#btn").val() == ""){
			alert("Campo Vazio");
			$("#btn").focus();
			return false;
		}else{
		  return true;
		}
		
	 });
  }
 </script>
</head>

<body>
	<header>
     
	</header>
    
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<img class="bandaCapa img-responsive" alt="Foto Radiador Splash" src="img/capaBandaLogo3.jpg">
				</div>
			</div>
			<h3>
				Agenda Radiador Splash.
			</h3>
			<p>
				Digite os dados corretamente.
			</p>
			<div class="row clearfix">
				<div class="col-md-12 column">
                <form method="post" name="adm" onSubmit="return main()" action="insere.php">
    <fieldset>
      <table>
        <thead></thead>
        <tbody>
        
             <tr>                          
               
                 <td><label>Mês</label></td><td><input type="text" id="mes" name="mes" maxlength="3" placeholder="Apenas 3 letras.Ex:Jan"></td>
                	<tr>               
                 <td><label>Dia</label></td><td><input type="text" id="dia" name="dia" maxlength="2"></td>
      				</tr>
                 <td><label>Estabelecimento</label></td><td><input type="text" id="estab" name="estab"></td>
                  
                  <td></td>       
             </tr>
        </tbody>
        </table>
        
        <table>
        <tbody>      
             <tr>                 
              
                  <td><label>Cidade</label></td><td><input type="text" id="local" name="local" ></td>
                	<tr>
                  <td> <label>Horário</label></td><td><input type="text" id="time" name="time" placeholder="xx:xx" maxlength="5"></td>
                  	</tr>
                  <td><label>Telefone</label></td><td><input type="text" id="tel" name="tel" placeholder="xx-xxxxxxxxx" maxlength="12"></td>
              		<tr>
                  <td><label>Link:</label></td><td><input type="text" id="link" name="link" placeholder="http://www.site.com.br"></td>
                    </tr>    
              </tr>
              
         </tbody>
       </table>
       		<input type="submit" id="gravar" value="" class="botaoGravar1" title="Grave aqui as alterações."> 
       </fieldset>
     </form>
				</div>
			</div>
			<h3>
				WebShop - Radiador Splash.
			</h3>
			<div class="row clearfix">
				<div class="col-md-12 column">
                <form method="post" name="adm_shop" onSubmit="return validar" action="shopconect.php" enctype="multipart/form-data">
    	<fieldset>
      <table>
        <thead></thead>
        <tbody>
        
             <tr>                          
               
                 <td><label>Antigo Produto</label> </td><td><input type="text" id="antigo_produto" name="antigo_produto" class="ajusteTamanho"></td>
              <tr> <td><label>Novo Produto</label> </td><td><input type="text" id="novo_produto" name="novo_produto" class="ajusteTamanho"></td></tr> 
                    <tr>           
                 <td><label>Imagem</label></td><td><input type="file" id="img" name="img" class="ajusteTamanho"></td>
      				</tr>
                 <td><label>Descrição</label></td><td><input type="text" id="desc" name="desc" class="ajusteTamanho"></td>    
             </tr>
             	<tr>
             		<td><label>Botão</label></td><td><textarea id="btn" name="btn"></textarea></td> 
              		
            	</tr>  
         </tbody>
       </table> 
       		<input type="submit" id="alterar" value="" class="botaoGravar2" title="Grave aqui suas alterações.">
       	</fieldset>
     </form>  
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">
    <?php
	echo '<h3 class="ajustephp"><a href="login.php"><img src="exit8.png" alt="Sair da página" title="Sair"/></a></h3>';
	session_start();
	session_destroy();
	 ?>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>