<?php







class Prestation implements JsonSerializable{


    private $_id;

    private $_libelle;

    private $_description;
    
    private $_prix;

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


    public function jsonSerialize(){
        return ["libelle"=>$this->get_libelle(),"description"=>$this->get_description(), "prix"=>$this-> get_prix(),"duree"=> $this-> get_duree()];
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
	public function get_libelle() {
		return $this->_libelle;
	}
	
	/**
	 * @param mixed $_libelle 
	 * @return self
	 */
	public function set_libelle($_libelle): self {
		$this->_libelle = $_libelle;
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
}