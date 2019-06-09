<?php 
	require_once "autoload.php";
	$competidores = ManipJSON::pegarAtletas();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Add Comp</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" href="bootstrap.css">
 </head>
 <body>
 	<?php include_once "componentes/header.class.php" ?>
 	<br>
 	<?php include_once "componentes/add_comp_html.class.php"  ?>
 </body>
 </html>

 <?php 







include_once "componentes/footer.class.php"
 ?>