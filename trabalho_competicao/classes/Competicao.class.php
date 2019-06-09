<?php 
require_once "autoload.php";
/**
 * 
 */
class Competicao extends AbsClassNome implements JsonSerializable
{
	
	private $local;
	private $valor_premio;
	private $esporte;
	private $competidores;
    private $campeao;
    private $data;


	/**
	 * Class Constructor
	 * @param    $local   
	 * @param    $valor_premio   
	 * @param    $esporte   
	 */
	public function __construct($id, $nome, $local, $valor_premio, $esporte, $competidores, $campeao, $data)
	{
		$this->local = $local;
		$this->valor_premio = $valor_premio;
		if ($esporte instanceof Esporte) {
			$this->esporte = $esporte;
		}
		parent::setId($id);
		parent::setNome($nome);
		if (is_array($competidores)) {
			$this->competidores = $competidores;
		}
        $this->campeao = null;
        if ($campeao instanceof Atleta) {
            $this->campeao = $campeao;
        }
        $this->data = $data;
	}

    /**
     * @return mixed
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * @param mixed $local
     *
     * @return self
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorPremio()
    {
        return $this->valor_premio;
    }

    /**
     * @param mixed $valor_premio
     *
     * @return self
     */
    public function setValorPremio($valor_premio)
    {
        $this->valor_premio = $valor_premio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEsporte()
    {
        return $this->esporte;
    }

    /**
     * @param mixed $esporte
     *
     * @return self
     */
    public function setEsporte($esporte)
    {
        $this->esporte = $esporte;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompetidores()
    {
        return $this->competidores;
    }

    /**
     * @param mixed $competidores
     *
     * @return self
     */
    public function setCompetidores($competidores)
    {
        $this->competidores = $competidores;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCampeao()
    {
        return $this->campeao;
    }

    /**
     * @param mixed $campeao
     *
     * @return self
     */
    public function setCampeao($campeao)
    {
        if ($campeao instanceof Atleta) {
             $this->campeao = $campeao;
        }

        return $this;
    }

     public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $campeao
     *
     * @return self
     */
    public function setData($data)
    {
        
        $this->data = $data;
        

        return $this;
    }

  



    public function mostrarCompetidores()
    {
        if (is_array($this->getCompetidores())) {
           $string ="#Competidores# <br>";
            foreach ($this->getCompetidores() as $key => $value) {
                if ($value instanceof Atleta) {
                   $string.=$value." <br>";
                } 
            }
            return $string;
        }
    	return " ";
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'nome' => $this->getNome(),
            'local' => $this->getLocal(),
            'data' => $this->getData(),
            'valor_premio' => $this->getValorPremio(),
            'esporte' => $this->getEsporte(),
            'competidores' => $this->getCompetidores(),
            'campeao' => $this->getCampeao()
            ];
    }

    public function __toString()
    {
    	return "#Competição# || Local: ". $this->getLocal() ." | Data: ". $this->getData(). " | Valor Prêmio: ". $this->getValorPremio()." | ".$this->getEsporte()." | <br>". $this->mostrarCompetidores(). parent::__toString(). "<br>Campeão: ". $this->getCampeao();
    }


}

 ?>