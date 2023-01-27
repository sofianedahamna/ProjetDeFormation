<?php

//namespace \application\entities;

/**
 * Description of Client
 *
 * @author soso
 */
class Client implements JsonSerializable  {

	private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_telephone;
    private $_login;
    private $_motDePasse;
    private $_dateDeNaissance;
   

    
    public function __construct(array $params) {
        $this->hydrate($params);
        //$this->setmotDePasse(self::passwordGenerator());
    }

    function hydrate($params) {
        foreach ($params as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
	

	
	
    public function jsonSerialize(){
        return ["nom"=>$this-> getnom(),"prenom"=> $this-> getprenom(),"email"=>$this->getemail(),"telephone"=>$this->gettelephone(),"login"=>$this->getlogin(),"motDePasse"=>$this->getmotDePasse(),"dateDeNaissance"=>$this-> getdateDeNaissance(),];
    }
	


	/**
	 * @return mixed
	 */
	public function getdateDeNaissance() {
		return $this->_dateDeNaissance;
	}
	
	/**
	 * @param mixed $_dateDeNaissance 
	 * @return self
	 */
	public function setdateDeNaissance($dateDeNaissance): self {
		$this->_dateDeNaissance = $dateDeNaissance;
		return $this;
	}
	

	/**
	 * @return mixed
	 */
	public function getmotDePasse() {
		return $this->_motDePasse;
	}
	
	/**
	 * @param mixed $_motDePasse 
	 * @return self
	 */
	public function setmotDePasse($motDePasse): self {
		$this->_motDePasse = $motDePasse;
		$this->_motDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getlogin() {
		return $this->_login;
	}

	/**
	 * @param mixed $_login 
	 * @return self
	 */
	public function setlogin($login): self {
		$this->_login = $login;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getprenom() {
		return $this->_prenom;
	}
	
	/**
	 * @param mixed $_prenom 
	 * @return self
	 */
	public function setprenom($prenom): self {
		$this->_prenom = $prenom;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getid() {
		return $this->_id;
	}

	/**
	 * @param mixed $_id 
	 * @return self
	 */
	public function setid($id): self {
		$this->_id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getnom() {
		return $this->_nom;
	}

	/**
	 * @param mixed $_nom 
	 * @return self
	 */
	public function setnom($nom): self {
		$this->_nom = $nom;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getemail() {
		return $this->_email;
	}

	/**
	 * @param mixed $_email 
	 * @return self
	 */
	public function setemail($email): self {
		$this->_email = $email;
		$this->setlogin($email);
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function gettelephone() {
		return $this->_telephone;
	}

	/**
	 * @param mixed $_telephone 
	 * @return self
	 */
	public function settelephone($telephone): self {
		$this->_telephone = $telephone;
		return $this;
	}
}
