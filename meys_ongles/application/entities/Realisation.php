<?php





class Realisation implements JsonSerializable{

    private $_id;

    private $_prestation;

    private $_description;



public function __construct(array $params)
{
        $this->hydrate($params);
}

function hydrate($params) {
    foreach ($params as $key => $value) {
        $method = "set" . ucfirst($key);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }
}

	/**
	 * @return mixed
	 */
	public function get_prestation() {
		return $this->_prestation;
	}
	
	/**
	 * @param mixed $_prestation 
	 * @return self
	 */
	public function set_prestation($_prestation): self {
		$this->_prestation = $_prestation;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function get_description() {
		return $this->_description;
	}
	
	/**
	 * @param mixed $_description 
	 * @return self
	 */
	public function set_description($_description): self {
		$this->_description = $_description;
		return $this;
	}

    public function jsonSerialize(){
        return ["prestation"=>$this->get_prestation(), "description"=>$this-> get_description()];
    }




	/**
	 * @return mixed
	 */
	public function get_id() {
		return $this->_id;
	}
	
	/**
	 * @param mixed $_id 
	 * @return self
	 */
	public function set_id($_id): self {
		$this->_id = $_id;
		return $this;
	}
}