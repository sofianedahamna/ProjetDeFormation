<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utilisateur
 *
 * @author soso
 */
 class Adresse{

	private $_id;
    private $_numerodeVoie;
    private $_libelledeVoie;
    private $_ville;
    private $_codePostal;


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
	 * 
	 * @return mixed
	 */
	function getVille() {
		return $this->_ville;
	}
	
	/**
	 * 
	 * @param mixed $_ville 
	 * @return Adresse
	 */
	function setVille($ville): self {
		$this->_ville = $ville;
		return $this;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	function getCodePostal() {
		return $this->_codePostal;
	}
	
	/**
	 * 
	 * @param mixed $_codePostal 
	 * @return Adresse
	 */
	function setCodePostal($codePostal): self {
		$this->_codePostal = $codePostal;
		return $this;
	}
	/**
	 * @param $_numeroDeLaVoie mixed 
	 * @param $_typeDeVoie mixed 
	 * @param $_nomDeLaVoie mixed 
	 * @param $_ville mixed 
	 * @param $_codePostal mixed 
	 */
	/**
	 * 
	 * @return mixed
	 */
	function getId() {
		return $this->_id;
	}
	
	/**
	 * 
	 * @param mixed $_id 
	 * @return Adresse
	 */
	function setId($id): self {
		$this->_id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getlibelledeVoie() {
		return $this->_libelledeVoie;
	}

	/**
	 * @param mixed $_libelledeVoie 
	 * @return self
	 */
	public function setlibelledeVoie($libelledeVoie): self {
		$this->_libelledeVoie = $libelledeVoie;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getnumerodeVoie() {
		return $this->_numerodeVoie;
	}

	/**
	 * @param mixed $_numerodeVoie 
	 * @return self
	 */
	public function setnumerodeVoie($numerodeVoie): self {
		$this->_numerodeVoie = $numerodeVoie;
		return $this;
	}
}
