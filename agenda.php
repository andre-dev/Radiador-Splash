<!DOCTYPE html>
<html lang="pt-br"

<head>
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

<?php
require_once('conectar.php');
mysql_select_db($nome_banco,$conexao);
$sql = "SELECT * FROM agenda order by cd_reg desc LIMIT 9";
$sql2 = mysql_query($sql, $conexao)or die(mysql_error());
$row_agenda = mysql_fetch_assoc($sql2);
$total_row_agenda = mysql_num_rows($sql2);

?>
</head>

<body>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
		<div class="page-header-ajuste">

			<div class="row clearfix">
				<div class="col-md-12 column">
					<img class="bandaCapa" alt="800x300" src="img/capaBandaLogo2.jpg" class="img-responsive">
				</div>
			</div>

			<!-- <img alt="1140x100" src="img/logo.jpg" class="img-responsive">
             <!--<h1>
                 Radiador Splash <small>O melhor no mpb na Baixada Santista.</small>
             </h1>-->
		</div>
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><!-- class="active" --> 
              <a href="sobre.html">Sobre</a> </li>
            <li  class="active"> <a href="agenda.php">Agenda</a> </li>
            <li> <a href="#">WebShop</a> </li>
            <li> <a href="multimidia.html">Multimídia</a> </li>
            <li> <a href="discografia.html">Discografia</a> </li>
            <li> <a href="contato.html">Contato</a> </li>
            <!--<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>-->
          </ul>
          <!--<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>--> 
        </div>
      </nav>
     <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							Local
						</th>
                        <th>
							Cidade
						</th>
						<th>
							Data
						</th>
						<th>
							Horário
						</th>
                        <th>
							Contato
						</th>
                        <th>
							Mais informações
						</th>
					</tr>
				</thead>
                <?php if($total_row_agenda>0){
		   do{ ?>
				<tbody>
					<tr class="active">
						<td>
							<?php echo $row_agenda['nm_end'] ?>
						</td>
                        <td>
							<?php echo $row_agenda['nm_lugar'] ?>
						</td>
						<td>
							<?php echo $row_agenda['dt_dia']?>/<?php echo $row_agenda['dt_mes'] ?>
						</td>
						<td>
							<?php echo $row_agenda['hr_horario'] ?>
						</td>
                        <td>
							<?php echo $row_agenda['cd_tel'] ?>
						</td>
                         <td>
							<a href="<?php echo $row_agenda['nmInfo'] ?>">Clique aqui !</a>
						</td>
					</tr>
				</tbody>
                <?php } while ($row_agenda = mysql_fetch_assoc($sql2));}?>
			</table>
		</div>
	</div>
      <div class="row clearfix" id="fundo">
        <div class="col-md-6 column">
          <h3 class="text-left"> Mídias sociais: </h3>
          <div class="row clearfix">
            <div class="col-md-3 column"> <a href="https://www.facebook.com/radiadorsplash?fref=ts" target="parent"><img alt="140x140" src="img/rede1.png" title="Facebook" class="img-default"></a> </div>
            <div class="col-md-3 column"> <a href="http://palcomp3.com/radiadorsplash/" target="parent"><img alt="140x140" src="img/rede2.png" title="Palco MP3" class="img-default"></a> </div>
            <div class="col-md-3 column"> <a href="https://www.youtube.com/channel/UCMS9KppFBu4RYXWH5QamGYA" target="parent"><img alt="140x140" src="img/rede3.png" title="Youtube" class="img-default"></a> </div>
            <div class="col-md-3 column"> <img alt="140x140" src="img/rede4.png" title="Instagram" class="img-default"> </div>
          </div>
        </div>
        <div class="col-md-6 column">
          <h3 class="text-left"> <br />
          </h3>
          <div class="row clearfix">
            <div class="col-md-3 column"> <a href="https://www.facebook.com/barcafecasavelha?fref=ts" target="parent"><img alt="140x140" src="img/parc1.png" title="Bar café casa velha" class="img-default"></a> </div>
            <div class="col-md-3 column"> <a href="https://www.facebook.com/mariachuteirabar" target="parent"><img alt="140x140" src="img/parc2.png" title="Maria chuteira" class="img-default"></a> </div>
            <div class="col-md-3 column"> <a href="https://www.facebook.com/estudio.tocadotubarao?fref=ts" target="parent"><img alt="140x140" src="img/parc3.png" title="Toca do tubarão" class="img-default"></a> </div>
            <div class="col-md-3 column"> <a href="https://www.facebook.com/jcmusicalarte?fref=ts" target="parent"><img alt="140x140" src="img/parc4.png" title="Musical arte" class="img-default"></a> </div>
          </div>
        </div>
      </div>
      <p class="text-center text-info" id="textoFooter"> <br />
        <strong>Todos os direitos reservados a Radiador Splash © 2015.</strong><br />
        <small>Desenvolvido por Amr-Info.</small> </p>
    </div>
  </div>
</div>
</body>
</html>