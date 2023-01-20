<?php 











class Rdv implements JsonSerializable{

    private $_id;
	private $_heureRdv;
	private $_dateRdv;
	private $_prestationRdv;
	private $_descriptionRdv;


    function __construct($params) {
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
    public function jsonSerialize(){
        return [];
    }



	/**
	 * @return mixed
	 */
	public function get_prestationRdv() {
		return $this->_prestationRdv;
	}
	
	/**
	 * @param mixed $_prestationRdv 
	 * @return self
	 */
	public function set_prestationRdv($_prestationRdv): self {
		$this->_prestationRdv = $_prestationRdv;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function get_dateRdv() {
		return $this->_dateRdv;
	}
	
	/**
	 * @param mixed $_dateRdv 
	 * @return self
	 */
	public function set_dateRdv($_dateRdv): self {
		$this->_dateRdv = $_dateRdv;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function get_heureRdv() {
		return $this->_heureRdv;
	}
	
	/**
	 * @param mixed $_heureRdv 
	 * @return self
	 */
	public function set_heureRdv($_heureRdv): self {
		$this->_heureRdv = $_heureRdv;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function get_descriptionRdv() {
		return $this->_descriptionRdv;
	}

	/**
	 * @param mixed $_descriptionRdv 
	 * @return self
	 */
	public function set_descriptionRdv($_descriptionRdv): self {
		$this->_descriptionRdv = $_descriptionRdv;
		return $this;
	}
}