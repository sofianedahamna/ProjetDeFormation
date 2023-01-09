<?php 




class PrestationManager implements iModel{
    private $_pdo;

    const INSRT_RQST_DONUTS_PHOTO = "INSERT INTO photocake_tbl (path_photo,donuts_photo) "
    . "VALUES (:path,:donuts)";
    const INSRT_RQST_DONUTS = "INSERT INTO donuts_tbl (reference_donuts,denomination_donuts,description_donuts) "
    . "VALUES (:reference,:denomination,:description)";

    const SLCT_RQST_DONUTS_BY_KEYWORD ="SELECT * FROM donuts_tbl WHERE (reference_donuts regexp :reference OR denomination_donuts regexp :denomination OR description_donuts regexp :description)";

    const SLCT_REFERENCE= "SELECT COUNT(*) as count FROM donuts_tbl WHERE reference_donuts=:reference";

    public function __construct(\PDO $PDO) {
        $this->setPdo($PDO);
    }

    public function add(object $donuts): array {
        $flag = false;
        $msg = "";
        try {

            //Insertion de reference et autre
            $this->getPDO()->beginTransaction(); //Début de la transaction et sortie du mode autocommit
            $statement_donuts = $this->getPDO()->prepare(self::INSRT_RQST_DONUTS);
            $statement_donuts->bindValue(":reference", $donuts->getReference(), \PDO::PARAM_STR);
            $statement_donuts->bindValue(":denomination", $donuts->getDenomination(), \PDO::PARAM_STR);
            $statement_donuts->bindValue(":description", $donuts->getDescription(), \PDO::PARAM_STR);
            $statement_donuts->execute();
            $id_donuts = $this->getPDO()->lastInsertId();

            //Insertion d'une photo donuts
            $statement_photo = $this->getPDO()->prepare(self::INSRT_RQST_DONUTS_PHOTO);
            $statement_photo->bindValue(":path", $photoCake->getPath(), \PDO::PARAM_STR);
            $statement_photo->bindValue(":donuts", $id_donuts, \PDO::PARAM_INT);
            $statement_photo->execute();

           $this->getPDO()->commit(); // Validation des requêtes
        } catch (\Exception $exc) {
            $flag = true;
            $msg = $exc->getTraceAsString();
            $this->getPDO()->rollBack(); // Si erreur => annulation des modifications 
        }
        return ["err_flag" => $flag, "error_msg" => $msg];
    }
    public function get(string $keyword): array {
        $donuts = null;
        $listedonuts = array();
        try {
            $statement = $this->getPDO()->prepare(self::SLCT_RQST_DONUTS_BY_KEYWORD);
            $statement->bindValue(":reference", $keyword, \PDO::PARAM_STR);
            $statement->bindValue(":denomination", $keyword, \PDO::PARAM_STR);
            $statement->bindValue(":description", $keyword, \PDO::PARAM_STR);
            $statement->setFetchMode(\PDO::FETCH_ASSOC);
            $statement->execute();
            while ($tupe = $statement->fetch()) {
               //var_dump($tupe);
                $dataTbTuple = $this->extractDatas($tupe);
                $donuts = new donuts($dataTbTuple);
                //var_dump($donuts);
                $listedonuts[] = $donuts;
            }
        } catch (\Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $listedonuts;
    }
    public function count($param) {
        
    }

    public function delete($params) {
        
    }

    public function exists($param) {
        
    }

    public function getList(array $param) {
        
    }

    public function update($params) {
        
    }
     
     static function referenceExists(String $reference): bool {
        $flag = false;
        $statement = self::getPdo()->prepare(self::SLCT_REFERENCE);
        $statement->bindValue(":reference", $reference, PDO::PARAM_STR);
        $statement->execute();
        if (intval($statement->fetch()['count']) >= 1):
            $flag = true;
        endif;
        return $flag;
    }

	/**
	 * 
	 * @return mixed
	 */
	function getPdo() {
		return $this->_pdo;
	}
	
	/**
	 * 
	 * @param mixed $_pdo 
	 * @return donutsManager
	 */
	function setPdo($_pdo): self {
		$this->_pdo = $_pdo;
		return $this;
	}
    function extractDatas($array): array {
        $datas = null;
        foreach ($array as $key => $value) {
            $datas[str_replace(array("_donuts",), "", $key)] = $value;
        }
        return $datas;
    }
}