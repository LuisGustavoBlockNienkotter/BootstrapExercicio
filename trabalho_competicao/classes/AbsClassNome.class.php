<?php 

require_once "autoload.php";

class AbsClassNome extends AbsClassId
{
	
	private $nome;


	/**
	 * Class Constructor
	 * @param    $nome   
	 */
	public function __construct($nome)
	{
		$this->nome = $nome;
	}


	
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

     public function __toString()
    {
    	return "Nome: ". $this->getNome() . " | ". parent::__toString();
    }
}


 ?>