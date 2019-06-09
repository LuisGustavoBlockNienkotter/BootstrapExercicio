<?php 
require_once "autoload.php";
if (isset($_GET['id_atl'])) {
	$id_atl = $_GET['id_atl'];
	ManipListas::removerAtleta($id_atl);
}
if (isset($_GET['id_comp'])) {
	$id_comp = $_GET['id_comp'];
	ManipListas::removerComp($id_comp);
}
if (isset($_GET['id_esp'])) {
	$id_esp = $_GET['id_esp'];
	ManipListas::removerEsporte($id_esp);
}
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" href="bootstrap.css">
 	<script type="text/javascript">
 			window.onscroll = function() {myFunction()};
			var header = document.getElementById("header");
			var sticky = header.offsetTop;
			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
 	</script>
 </head>
 <body>
	<?php include_once "componentes/header.class.php" ?>
	<br>
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-4">
		 		<?php include_once "componentes/atleta_card.class.php" ?>
		 	</div>
		 	<div class="col-4">
		 		<?php include_once "componentes/esporte_card.class.php" ?>
		 	</div>
		 	<div class="col-4">
		 		<?php include_once "componentes/competicao_card.class.php" ?>
		 	</div>
	 	</div>
 	</div>
 	<br> 
 	<?php include_once "componentes/atleta_tabela.class.php"  ?>
 	<br> 
 	<?php include_once "componentes/esporte_tabela.class.php"  ?>
 	<br> 
 	<?php include_once "componentes/comp_tabela.class.php"  ?>
 </body>
 </html>

 <?php 

include_once "componentes/footer.class.php"
 ?>