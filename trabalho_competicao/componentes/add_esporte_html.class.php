<?php 
require_once "autoload.php";

$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : "";
if (ManipListas::verificaEsporteComMesmoNome($nome)) {
	$esporte = new Esporte(ManipListas::gerarIdEsporte(), $nome, $descricao);
}
 ?>

<div>
		<div class="container-fluid">
			<form method="post">
				<h1>Dados do Esporte</h1>
				<br>
				<div class="row d-flex align-items-center">
					<div class="col-6">
						<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
					</div>
					<div class="col-6">
						<input type="textarea" name="descricao" id="descricao" class="form-control" placeholder="Descrição">
					</div>
				</div>
				<br>
				<div class="row d-flex align-items-center">
					<div class="col-12">
						<button class="btn btn-success" type="submit">Adicionar</button>
					</div>
				</div>
			</form>	
 		</div>
 	</div>

 	<?php 
 	if ($nome != "") {
 		$esportes = ManipJSON::pegarEsportes();
 		array_push($esportes, $esporte);
 		ManipJSON::gravar("Esporte", $esportes);
 	}
 		

 	 ?>