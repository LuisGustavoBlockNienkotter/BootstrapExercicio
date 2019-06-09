<?php  
require_once "autoload.php";
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$data = isset($_POST['data']) ? $_POST['data'] : "01/01/1970";
$local = isset($_POST['local']) ? $_POST['local'] : "";
$valor_premio = isset($_POST['valor_premio']) ? $_POST['valor_premio'] : "0";
$novos_competidores = isset($_POST['novos_competidores[]']) ? $_POST['novos_competidores[]'] : array();
$competidores = array();
foreach ($novos_competidores as $key => $value) {
	$competidor = ManipListas::procuraAtletaPorNome($value);
	array_push($competidores, $competidor);
}
$esporte_selecionado = isset($_POST['esporte_selecionado']) ? $_POST['esporte_selecionado'] : null;
$esporte = ManipListas::procuraEsportePorNome($esporte_selecionado);
$competidores = ManipJSON::pegarAtletas();
$esportes = ManipJSON::pegarEsportes();
 ?>
<div>
		<div class="container-fluid">
			<form method="post">
				<h1>Dados da Competição</h1>
				<br>
				<div class="row d-flex align-items-center">
					<div class="col-6">
						<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
					</div>
					<div class="col-6">
						<input type="date" name="data" id="data" class="form-control" placeholder="Data">
					</div>
				</div>
				<br>
				<div class="row d-flex align-items-center"> 
					<div class="col-6">
						<input type="text" name="local" id="local" class="form-control" placeholder="Local">
					</div>
					<div class="col-6">
						<input type="text" name="valor_premio" id="valor_premio" class="form-control" placeholder="Valor do Prêmio (em reais)">	
					</div>
				</div>
				<br>
				<div class="row d-flex align-items-center"> 
					<select multiple="true" class="form-control" name="novos_competidores[]">
						<?php  
							foreach ($competidores as $key => $value) {
								echo "<option>". $value->getNome(). "</option>";
							}
						?>
					</select>
				</div>
				<br>
				<div class="row d-flex align-items-center"> 
					<select class="form-control" name="esporte_selecionado">
						<?php  
							foreach ($esportes as $key => $value) {
								echo "<option>". $value->getNome(). "</option>";
							}
						?>
					</select>
				</div>
				<br>
				<div class="row d-flex align-items-center">
					<div class="col-12">
						<button class="btn btn-success" type="submit" name="add">Adicionar</button>
					</div>
				</div>
			</form>	
 		</div>
 	</div>
 	<?php 
 		if ($nome != "" && $local != "" && sizeof($competidores) > 0 && $esporte != null) {
 			$competicoes = ManipJSON::pegarCompeticoes();
 			$nova_comp = new Competicao(ManipListas::gerarIdComp(), $nome, $local, $valor_premio, $esporte, $competidores, null, $data);
 			array_push($competicoes, $nova_comp);
 			ManipJSON::gravar("Competicao", $competicoes);
 		}


 	 ?>

