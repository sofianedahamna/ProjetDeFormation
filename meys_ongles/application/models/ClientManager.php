<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of acheteurManager
 *
 * @author dahamna sofiane
 */
class ClientManager implements iModel {

    private $_PDO;
    const INSRT_RQST_UTLSTR = "INSERT INTO client_tbl (nom_clt,prenom_clt,email_clt,telephone_clt,dateDeNaissance_clt,login_clt,motDePasse_clt) "
            . "VALUES (:nom,:prenom,:email,:telephone,:dateDeNaissance,:login,:motDePasse)";
    const INSRT_RQST_ACTR = "INSERT INTO client_tbl (id_client,dateInscription_client) "
            . "VALUES (:id,:dateInscription)";
    const INSRT_RQST_ADR = "INSERT INTO adresse_tbl (numerodeVoie_adr,libelledeVoie_adr,ville_adr,codePostal_adr,idClient)"
            . "VALUES (:numerodeVoie,:libelledeVoie,:ville,:codePostal,:idClient)"; 
    const SLCT_RQST_UTLSTR_ACTR_BY_ID = "SELECT nom_utlstr,prenom_utlstr,email_utlstr,telephone_utlstr,login_utlstr,password_utlstr FROM utilisateur_tbl "
            . " JOIN acheteur_tbl WHERE id_utlstr = id_actr AND id_utlstr = :id ";
    const SLCT_RQST_UTLSTR_ACTR_BY_KEYWORD = "SELECT DISTINCT nom_utlstr,prenom_utlstr,email_utlstr,telephone_utlstr,login_utlstr,password_utlstr,dateAnniversaire_actr FROM utilisateur_tbl "
            . " JOIN acheteur_tbl ON id_utlstr = id_actr AND (nom_utlstr regexp :nom OR prenom_utlstr regexp :prenom OR email_utlstr regexp :email OR telephone_utlstr regexp :telephone)";

    public function __construct(\PDO $PDO) {
        $this->setPDO($PDO);
    }

    public function add(object $Client,object $Adresse): array {
        //var_dump($Client->getNom()."/".$Client->getPrenom()."/".$Client->getEmail()."/".$Client->getTelephone()."/".$Client->getdateDeNaissance()."/".$Client->getLogin()."/".$Client->getmotDePasse());
        //var_dump($Adresse);
        //var_dump($Client);
        $flag = false;
        $msg = "";
       // $id_utlstr = null;
        try {

            //Insertion d'un utilisateur
            $this->getPDO()->beginTransaction(); //Début de la transaction et sortie du mode autocommit
            $statement_utlstr = $this->getPDO()->prepare(self::INSRT_RQST_UTLSTR);
            $statement_utlstr->bindValue(":nom", $Client->getnom(), \PDO::PARAM_STR);
            $statement_utlstr->bindValue(":prenom", $Client->getprenom(), \PDO::PARAM_STR);
            $statement_utlstr->bindValue(":email", $Client->getemail(), \PDO::PARAM_STR);
            $statement_utlstr->bindValue(":telephone", $Client->gettelephone(), \PDO::PARAM_STR);
            $statement_utlstr->bindValue(":dateDeNaissance", $Client->getdateDeNaissance(), \PDO::PARAM_STR);
            $statement_utlstr->bindValue(":login", $Client->getlogin(), \PDO::PARAM_STR);
            $statement_utlstr->bindValue(":motDePasse", $Client->getmotDePasse(), \PDO::PARAM_STR);
            $statement_utlstr->execute(); 
            //var_dump( $statement_utlstr->execute());
            $id_clt = $this->getPDO()->lastInsertId();
            //var_dump($id_clt);
     
            $statement_adr = $this->getPdo()->prepare(self::INSRT_RQST_ADR);
            $statement_adr->bindValue(":numerodeVoie", $Adresse->getnumerodeVoie(), PDO::PARAM_STR);
            $statement_adr->bindValue(":libelledeVoie", $Adresse->getlibelledeVoie(), PDO::PARAM_STR);
            $statement_adr->bindValue(":ville", $Adresse->getVille(), PDO::PARAM_STR);
            $statement_adr->bindValue(":codePostal", $Adresse->getCodePostal(), PDO::PARAM_STR);
            $statement_adr->bindValue(":idClient", $id_clt ,PDO::PARAM_INT);
            //var_dump($statement_adr);
            $statement_adr->execute();
            //var_dump( $statement_adr->execute());

            $this->getPDO()->commit(); // Validation des requêtes
        } catch (\Exception $exc) {
            $flag = true;
            $msg = $exc->getTraceAsString();
            //var_dump($msg);
            $this->getPDO()->rollBack(); // Si erreur => annulation des modifications 
        }
        return ["err_flag" => $flag, "error_msg" => $msg];
    }

    public function count($param) {
        
    }

    public function delete($params) {
        
    }

    public function exists($param) {
        
    }

    public function get(string $keyword): array {
        $Acheteur = null;
        $listeAcheteurs = array();
        try {
            $statement = $this->getPDO()->prepare(self::SLCT_RQST_UTLSTR_ACTR_BY_KEYWORD);
            $statement->bindValue(":nom", $keyword, \PDO::PARAM_STR);
            $statement->bindValue(":prenom", $keyword, \PDO::PARAM_STR);
            $statement->bindValue(":email", $keyword, \PDO::PARAM_STR);
            $statement->bindValue(":telephone", $keyword, \PDO::PARAM_STR);
            $statement->setFetchMode(\PDO::FETCH_ASSOC);
            $statement->execute();
            while ($tupe = $statement->fetch()) {
                $dataTbTuple = $this->extractDatas($tupe);
                $Acheteur = new Client($dataTbTuple);
                $listeAcheteurs[] = $Acheteur;
            }
        } catch (\Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $listeAcheteurs;
    }

    public function getById(int $id): Client {
        $Acheteur = null;
        try {
            $statement = $this->getPDO()->prepare(self::SLCT_RQST_UTLSTR_ACTR_BY_ID);
            $statement->bindValue(":id", $id, \PDO::PARAM_INT);
            //ou
            //$statement->execute(array(":id" => intval($id)));
            $statement->setFetchMode(\PDO::FETCH_ASSOC);
            $statement->execute();

            $array2 = $statement->fetch();
            $array = $this->extractDatas($array2);
            $Acheteur = new Client($array);
        } catch (\Exception $exc) {

            echo $exc->getTraceAsString();
        }

        return $Acheteur;
    }

    public function getList(array $param) {
        
    }

    public function update($params) {
        
    }

    function getPDO() {
        return $this->_PDO;
    }

    function setPDO($PDO): void {
        $this->_PDO = $PDO;
    }

    function extractDatas($array): array {
        $datas = null;
        foreach ($array as $key => $value) {
            $datas[str_replace(array("_clt",), "", $key)] = $value;
        }
        return $datas;
    }

}
