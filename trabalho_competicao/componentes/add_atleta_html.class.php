<?php 
require_once "autoload.php";
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : "01/01/1970";
$nmr_vitorias = isset($_POST['nmr_vitorias']) ? $_POST['nmr_vitorias'] : 0;
$valor_ganho_em_premios = isset($_POST['valor_ganho_em_premios']) ? $_POST['valor_ganho_em_premios'] : 0;


 ?>
<div>
		<div class="container-fluid">
			<form method="post">
				<h1>Dados do Atleta</h1>
				<br>
				<div class="row d-flex align-items-center">
					<div class="col-6">
						<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
					</div>
					<div class="col-6">
						<input type="date" name="data_nascimento" id="data_nascimento" class="form-control" placeholder="Data de nascimento">
					</div>
				</div>
				<br>
				<div class="row d-flex align-items-center"> 
					<div class="col-6">
						<input type="text" name="nmr_vitorias" id="nmr_vitorias" class="form-control" placeholder="Numero de vitórias">
					</div>
					<div class="col-6">
						<input type="text" name="valor_ganho_em_premios" id="valor_ganho_em_premios" class="form-control" placeholder="Valor ganho em prêmios (em reais)">
						
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
 		$atletas = ManipJSON::pegarAtletas();
 		if ($nome != "" && $data_nascimento != "01/01/1970") {
 			$novo_atleta = new Atleta(ManipListas::gerarIdAtleta(), $nome, $data_nascimento);
 			$novo_atleta->setNmrVitorias($nmr_vitorias);
 			$novo_atleta->setValorGanhoEmPremios($valor_ganho_em_premios);
 			array_push($atletas, $novo_atleta);
 			ManipJSON::gravar("Atleta", $atletas);
 		}




 	 ?>