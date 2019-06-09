<?php 
require_once "autoload.php";

class ManipJSON {
	public static function gravar($nome_arquivo, $array)
	{
		$dados_json = json_encode($array, JSON_FORCE_OBJECT);
		$arquivo = "dados".DIRECTORY_SEPARATOR. $nome_arquivo.".json";
		$fp = fopen($arquivo, 'w');
		fwrite($fp, $dados_json);
		fclose($fp);
	}
	public static function ler($nome_arquivo)
	{
		$arquivo = "dados".DIRECTORY_SEPARATOR. $nome_arquivo.".json";
		$data = file_get_contents($arquivo);
		$json=json_decode($data);
		return $json;
	}
	public static function pegarAtletas()
	{
		$array_return = array();
		$json = ManipJSON::ler("Atleta");
		foreach ($json as $key => $value) {
			$id = $value->id;
			$nome = $value->nome;
			$data_nascimento = $value->data_nascimento;
			$nmr_vitorias = $value->nmr_vitorias;
			$valor_ganho_em_premios = $value->valor_ganho_em_premios;
			$novo_atleta = new Atleta($id, $nome, $data_nascimento);
			$novo_atleta->setNmrVitorias($nmr_vitorias);
			$novo_atleta->setValorGanhoEmPremios($valor_ganho_em_premios);
			array_push($array_return, $novo_atleta);
		}
		return $array_return;
	}
	public function pegarEsportes()
	{
		$array_return = array();
		$json = ManipJSON::ler("Esporte");
		foreach ($json as $key => $value) {
			$id = $value->id;
			$nome = $value->nome;
			$descricao = $value->descricao;
			$novo_esporte = new Esporte($id, $nome, $descricao);
			array_push($array_return, $novo_esporte);
		}
		return $array_return;
	}
	public function pegarCompeticoes()
	{
		$array_return = array();
		$json = ManipJSON::ler("Competicao");
		foreach ($json as $key => $value) {
			$id = $value->id;
			$nome = $value->nome;
			$local = $value->local;
			$valor_premio = $value->valor_premio;
			$esporte = new Esporte($value->esporte->id,$value->esporte->nome,$value->esporte->descricao);
			if ($value->campeao != null) {
				$campeao = new Atleta($value->campeao->id,$value->campeao->nome,$value->campeao->data_nascimento, $value->campeao->nmr_vitorias, $value->campeao->valor_ganho_em_premios);
			}else{
				$campeao = null;
			}
			$competidores = array();
			foreach ($value->competidores as $key => $value1) {
				$id_competidores = $value1->id;
				$nome_competidores = $value1->nome;
				$data_competidores = $value1->data_nascimento;
				$vitorias_competidores = $value1->nmr_vitorias;
				$valor_ganho_competidores = $value1->valor_ganho_em_premios;
				$competidor = new Atleta($id_competidores, $nome_competidores, $data_competidores);
				$competidor->setNmrVitorias($vitorias_competidores);
				$competidor->setValorGanhoEmPremios($valor_ganho_competidores);
				array_push($competidores, $competidor);
			}
			$data = $value->data;
			$nova_competicao = new Competicao($id, $nome, $local, $valor_premio, $esporte, $competidores, $campeao, $data);
			array_push($array_return, $nova_competicao);
		}
		return $array_return;
	}
	
}


 ?>