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



<!--FRASE -->
<div class="container-fluid fundocinzagroup">
    <div class="container">
        <div class="row clearfix">
        	<h3>Investments in Brazil</h3> <br>

        	<div class="col-md-4 column">
				<a href="investimentBraziliamCompanies.php"><img src="img/tec-eng.jpg" width="100%" alt=""></a>
			</div><!-- FIM COLUNA -->
			<div class="col-md-4 column">
				<a href="green.php"><img src="img/greencaiop.jpg" width="100%" alt=""></a>
			</div><!-- FIM COLUNA -->

			<div class="col-md-4 column">
				<a href="pyrozzar.php"><img src="img/pyrozzar.png" width="100%" alt=""></a>
			</div><!-- FIM COLUNA -->
		</div><!-- FIM ROW CLEARFIX -->
		<br><br>
	</div><!-- FIM CONTAINER -->
</div><!-- FIM CONTAINER -->

<?php include("include/rodape.php") ?>

<?php include("include/produzido.php") ?>

</body>
</html>

<script type="text/javascript">
    $(function() {
      var settings = { containerResizeSpeed: 350
      };
    $('#gallery a').lightBox(settings);
      });
</script><!--Fim Lightbox-->