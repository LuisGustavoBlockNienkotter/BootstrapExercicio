<?php 
require_once "autoload.php";
/**
 * 
 */
class Esporte extends AbsClassNome implements JsonSerializable 
{
	
	private $descricao;


	/**
	 * Class Constructor
	 * @param    $descricao   
	 */
	public function __construct($id, $nome, $descricao)
	{
		$this->descricao = $descricao;
		parent::setId($id);
		parent::setNome($nome);
	}


    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'nome' => $this->getNome(),
            'descricao' => $this->getDescricao()
            ];
    }

    public function __toString()
    {
    	return "#Esporte# || Descrição: ". $this->getDescricao() . " | ". parent::__toString();
    }
}


 ?>