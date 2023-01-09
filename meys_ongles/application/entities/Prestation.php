<?php







class Prestation implements JsonSerializable{


    private $_id;

    private $_titre;
    
    private $_prix;

    private $_prestation;

    private $_duree;





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
	public function get_duree() {
		return $this->_duree;
	}
	
	/**
	 * @param mixed $_duree 
	 * @return self
	 */
	public function set_duree($_duree): self {
		$this->_duree = $_duree;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function get_prix() {
		return $this->_prix;
	}

    public function set_prix($_prix): self {
		$this->_prix = $_prix;
		return $this;
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

    public function jsonSerialize(){
        return ["titre"=>$this->get_titre(), "prix"=>$this-> get_prix(),"prestation"=> $this-> get_prestation(),"duree"=> $this-> get_duree()];
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

	/**
	 * @return mixed
	 */
	public function get_titre() {
		return $this->_titre;
	}
	
	/**
	 * @param mixed $_titre 
	 * @return self
	 */
	public function set_titre($_titre): self {
		$this->_titre = $_titre;
		return $this;
	}
}