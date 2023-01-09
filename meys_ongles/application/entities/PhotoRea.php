<?php


class PhotoCake  {

    private $_id;

    private $_path;

    private $_Donuts;

    function __construct(...$params) {
        $this->hydrate(...$params);
     }
    
    function hydrate(...$params) {
        foreach ($params as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    
    

    /**
 * Get the value of _path
     */ 
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * Set the value of _path
     *
     * @return  self
     */ 
    public function setPath($_path)
    {
        $this->_path = $_path;

        return $this;
    }

    /**
     * Get the value of _id
     */ 
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function setId($_id)
    {
        $this->_id = $_id;

        return $this;
    }
    public function jsonSerialize(){
        return ["path"=>$this-> getPath(),"photoDonuts"=> $this-> getDonuts()];
    }
	/**
	 * 
	 * @return mixed
	 */
	function getDonuts() {
		return $this->_Donuts;
	}
	
	/**
	 * 
	 * @param mixed $_Donuts 
	 * @return
	 */
	function setDonuts($_Donuts): self {
		$this->_Donuts = $_Donuts;
		return $this;
	}
}