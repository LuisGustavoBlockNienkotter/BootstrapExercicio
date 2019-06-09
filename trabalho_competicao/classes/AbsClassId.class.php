<?php 

/**
 * 
 */
abstract class AbsClassId
{
	
	private $id;


	/**
	 * Class Constructor
	 * @param    $id   
	 */
	public function __construct($id)
	{
		$this->id = $id;
	}


	
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function __toString()
    {
    	return "ID: ". $this->getId();
    }
}


 ?>