﻿<?
ini_set("SMTP", "localhost");
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];



$dpto="wbc@wbcexpo.com.br";
$Titulo="Mensagem enviada pelo Site ASY";
$Destinatario="$dpto";
$mensagem1="
Nome: $nome
E-mail: $email
Telefone: $telefone
Assunto: $assunto
Mensagem: $mensagem";
mail("$Destinatario","$Titulo","$mensagem1","From:$email");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ASY Trading, LLC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<!-------------------------------- TOPO / MENU --------------------------------->
<?php include("include/topomenu.php") ?>


<!------------- Listra ------------>
<div class="container-fluid linha">
</div>



<!-------------------------------- CONTEUDO --------------------------------->
<div class="container-fluid">
    <div class="container">
        <div class="row clearfix">
            
            <div class="col-md-8 column">
            	<div class="titulo" align="center">
                	Message sent successfully!<br />
                </div>
            </div><!-- FIM COLUNA -->
            
            <div class="col-md-4 column">
            	<div class="titulo">
                	&nbsp;
                </div>
                <div class="texto">
                	<strong>Contact us:</strong><br />
                    <br />
                    Phone:+1 (305) 744-5080<br />
                    Fax: +1 (305) 744-5081<br />
                    Toll Free: 866-823-ASY8<br />
                    contact@asytrading.com<br />
                    <br />
                    <strong>Address:</strong><br />
                    <br />
                    444 Brickell Ave, Ste 51-322<br />
                    Miami, FL 33131<br />
                    USA
                </div>
            </div><!-- FIM COLUNA -->
            
        </div><!-- FIM ROW CLEARFIX -->
    </div><!-- FIM CONTAINER -->
</div><!-- FIM CONTAINER -->




<!-------------------------------- RODAPE --------------------------------->
<?php include("include/rodape.php") ?>


<!----- Produzido ----->
<?php include("include/produzido.php") ?>


</body>
</html>


