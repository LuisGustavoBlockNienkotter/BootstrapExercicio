<?php 

require_once "autoload.php";
/**
 * 
 */
class Atleta  extends AbsClassNome implements JsonSerializable 
{
	
	private $data_nascimento;
	private $nmr_vitorias;
	private $valor_ganho_em_premios;

	public function __construct($id, $nome, $data_nascimento)
	{
		$this->data_nascimento = $data_nascimento;
		parent::setId($id);
		parent::setNome($nome);
		$this->nmr_vitorias = 0;
		$this->valor_ganho_em_premios = 0;
	}

	    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     *
     * @return self
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNmrVitorias()
    {
        return $this->nmr_vitorias;
    }

    /**
     * @param mixed $nmr_vitorias
     *
     * @return self
     */
    public function setNmrVitorias($nmr_vitorias)
    {
        $this->nmr_vitorias = $nmr_vitorias;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorGanhoEmPremios()
    {
        return $this->valor_ganho_em_premios;
    }

    /**
     * @param mixed $valor_ganho_em_premios
     *
     * @return self
     */
    public function setValorGanhoEmPremios($valor_ganho_em_premios)
    {
        $this->valor_ganho_em_premios = $valor_ganho_em_premios;

        return $this;
    }

    

    public function jsonSerialize()
    {
    	return [
    		'id' => $this->getId(),
    		'nome' => $this->getNome(),
    		'data_nascimento' => $this->getDataNascimento(),
    		'nmr_vitorias' => $this->getNmrVitorias(),
    		'valor_ganho_em_premios' => $this->getValorGanhoEmPremios()
			];
    }

     public function __toString()
    {
    	return "#Atleta# || Data Nascimento: ". $this->getDataNascimento() . " | Numero de Vitórias: ". $this->getNmrVitorias(). " | Valor Ganho em Premios: ". $this->getValorGanhoEmPremios()." | ". parent::__toString();
    }


}


 ?>