<?php 
require_once "autoload.php";
/**
 * 
 */
class ManipListas
{

	public static function gerarIdAtleta(){
		$atletas = ManipJSON::pegarAtletas();
		$maior = 1;
		$flag = true;
		foreach ($atletas as $key => $value) {
			if ($value->getId() >= $maior) {
				$maior = $value->getId();
			}
			if ($value->getId()==1) {
				$flag = false;
			}
		}
		if ($flag) {
			return 1;
		}
		return $maior+1;
	 }
	public static function gerarIdEsporte(){
		$esportes = ManipJSON::pegarEsportes();
		$maior = 1;
		$flag = true;
		foreach ($esportes as $key => $value) {
			if ($value->getId() >= $maior) {
				$maior = $value->getId()+1;
			}
			if ($value->getId()==1) {
				$flag = false;
			}
		}
		if ($flag) {
			return 1;
		}
		return $maior;
	 }
	public static function gerarIdComp(){
		$comps = ManipJSON::pegarCompeticoes();
		$maior = 1;
		$flag = true;
		foreach ($comps as $key => $value) {
			if ($value->getId() >= $maior) {
				$maior = $value->getId();
			}
			if ($value->getId()==1) {
				$flag = false;
			}
		}
		if ($flag) {
			return 1;
		}
		return $maior+1;
	 }
	public static function procuraAtletaPorNome($nome){
		$atletas = ManipJSON::pegarAtletas();
		foreach ($atletas as $key => $value) {
			if ($value->getNome() == $nome) {
				return $value;
			}
		}
		return null;
	 }
	public static function procuraEsportePorNome($nome){
		$esportes = ManipJSON::pegarEsportes();
		foreach ($esportes as $key => $value) {
			if ($value->getNome() == $nome) {
				return $value;
			}
		}
		return null;
	 }
	public static function verificaEsporteComMesmoNome($nome){
		$esportes = ManipJSON::pegarEsportes();
		foreach ($esportes as $key => $value) {
			if ($value->getNome() == $nome) {
				return false;
			}
		}
		return true;
	 }
	 public static function removerAtleta($id)
	 {
	 	$atletas = ManipJSON::pegarAtletas();
	 	$new_array = array();
	 	$remover = array();
	 	foreach ($atletas as $key => $value) {
	 		if ($value->getId() == $id) {
	 			$remover = array($value);
	 			$new_array = array_diff($atletas, $remover);
	 			ManipJSON::gravar("Atleta", $new_array);
	 		}
	 	}
	 }
	 public static function removerEsporte($id)
	 {
	 	$esportes = ManipJSON::pegarEsportes();
	 	$new_array = array();
	 	$remover = array();
	 	foreach ($esportes as $key => $value) {
	 		if ($value->getId() == $id) {
	 			$remover = array($value);
	 			$new_array = array_diff($esportes, $remover);
	 			ManipJSON::gravar("Esporte", $new_array);
	 		}
	 	}
	 }
	 public static function removerComp($id)
	 {
	 	$comps = ManipJSON::pegarCompeticoes();
	 	$new_array = array();
	 	$remover = array();
	 	foreach ($comps as $key => $value) {
	 		if ($value->getId() == $id) {
	 			$remover = array($value);
	 			$new_array = array_diff($comps, $remover);
	 			ManipJSON::gravar("Competicao", $new_array);
	 		}
	 	}
	 }

}



 ?>