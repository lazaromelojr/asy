﻿<!DOCTYPE html>
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
	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../img/favicon.png">
  
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
</head>

<body>
<!-- TOPO / MENU -->
<?php include("../include/topomenuportugues.php") ?>


<!-- Listra -->
<div class="container-fluid linha">
</div>



<!-- CONTEUDO -->
<div class="container-fluid">
    <div class="container">
        <div class="row clearfix">
            
            <div class="col-md-8 column">
            	<div class="titulo">
                	Contato
                </div>
                <div class="texto">
                	<FORM ACTION= "../sent.php" METHOD="POST" id="sendContact" id="formularioContato">
                    
                              <table width="700" class="margemtabela">
                                <tr>
                                    <td><INPUT TYPE="text" NAME="nome" SIZE="84" id="nome" placeholder="Nome: "></td>
                                </tr>
                              </table>
                             
                              <table width="700" class="margemtabela">
                                <tr>
                                    <td><INPUT TYPE="text" NAME="email" SIZE="84"  id="email" placeholder="E-mail: "></td>
                                </tr>
                              </table>
                              
                              <table width="700" class="margemtabela">
                                <tr>  
                                    <td><INPUT TYPE="text" NAME="assunto" SIZE="84" id="assunto" placeholder="Assunto: "></td>
                                </tr>
                              </table>
                              <table width="700" class="margemtabela">
                                <tr>
                                    <td><TEXTAREA NAME="mensagem" ROWS="8" COLS="85" class="area" id="mensagem" placeholder="Mensagem: "></TEXTAREA></td>
                                </tr>
                                
                              </table>
                                <br />
                               
                              <table width="140" class="margemtabela">
                              <tr>
                                    <input type="hidden" name="subject" value="CONTATO SITE" />
                                  <td> <INPUT TYPE="submit" VALUE="Enviar" class="bt_form"> </td>
                                  <td> <INPUT TYPE="reset" VALUE="Limpar" class="bt_form"></td>
                              </tr>
                              </table>
                              <br />
                    </FORM>
                </div>
            </div><!-- FIM COLUNA -->
            
            <div class="col-md-4 column">
            	<div class="titulo">
                	&nbsp;
                </div>
                <div class="texto">
                    <br />
                    Celular: + 55 31 9 9116.6120 <br>
                    Tel.: +55 31 3439.3439 <br>
                    E-mail: wbc@wbcexpo.com.br <br>
                    <br /> <br>
                    <strong>Endereço:</strong><br />
                    <br />
                    Rua Guimarães, 270 | São Francisco <br>
                    Belo Horizonte | Minas Gerais <br>
                    Brasil | CEP 31255-050 
                </div>
            </div><!-- FIM COLUNA -->
            
        </div><!-- FIM ROW CLEARFIX -->
    </div><!-- FIM CONTAINER -->
</div><!-- FIM CONTAINER -->




<?php include("../include/rodapeportugues.php") ?>

<?php include("../include/produzidopt.php") ?>



</body>
</html>


