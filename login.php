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
         <?php			
			  $nome = $_POST['nome'];
  			  $senha = $_POST['senha'];
			  function valida($nome,$senha){
  				if(($nome == "adm")&&($senha == "123")){
  				session_start();
  				$_SESSION['nome'] = $nome;
  				$_SESSION['senha'] = $senha;
   				header('location:adm.php');
  				}
  			 }			  
			?>
    <script>
	  $(main);
	  function main(){
		  $("#logar").click(function(){
			   if(($("#nome").val() == ""){
				   alert("Campo em branco");
				   $("#nome").val("");
				   $("#nome").focus();
				   return false;
				   }
				   if($("#senha").val()== ""){
					   alert("Senha Incorreta");
					   $("#senha").val("");
					   $("#senha").focus();
					   return false;
				   }else{
					   <?php valida($nome,$senha);?>
					   return true;
					   }
			  });
		  }
	</script>
</head>

<body>
	<header>

	</header>
    <main>
    <div class="container">
    	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-12 column">
                	<img alt="1140x100" src="img/logo.jpg" class="img-responsive">
				</div>
			</div>
			<h3 class="text-center" id="centerSHOP">
				Área administrativa - Radiador Splash
			</h3>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-2 column">
		</div>
		<div class="col-md-4 column">
			<form role="form"  method="post" onSubmit=" return main()">
				<div class="form-group">
					 <label for="exampleInputEmail1">Usuário:</label><input type="text" class="form-control" name="nome" id="nome" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Senha:</label><input type="password" class="form-control" name="senha" id="senha" />
				</div>
				<div>
				</div> <input type="submit" value="Entrar" id="logar" class="btn btn-default">
			</form>
		</div>
		<div class="col-md-2 column">
		</div>
		<div class="col-md-2 column">
		</div>
	</div>   
</div>          
    </main>    
</body>
</html>