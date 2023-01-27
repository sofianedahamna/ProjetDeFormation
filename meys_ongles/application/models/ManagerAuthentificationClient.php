<?php
//namespace application\models;
/**
 * Description of ManagerAuthentificationClient
 *
 * @author sofiane dahamna
 */
class ManagerAuthentificationClient {

    private $_pdo;

    const SLCT_RQST_UTLSTR_EXIST = "SELECT COUNT(*) as count FROM client_tbl WHERE login_clt=:login AND motDePasse_clt = :motDePasse";
    const SLCT_RQST_UTLSTR_DATAS = "SELECT nom_clt ,prenom_clt FROM client_tbl WHERE login_clt=:login AND motDePasse_clt = :motDePasse";

    public function __construct(\PDO $PDO) {
        $this->setPdo($PDO);
    }

    public function access($identifiant, $password) : bool{
        $rspAccess = false;
        $msg = "";
        $count =null;
        try {
            //connection utilisateur recuperation login password
            $statement = $this->getPdo()->prepare(self::SLCT_RQST_UTLSTR_EXIST);
            $statement->bindValue(":login", $identifiant, PDO::PARAM_STR);
            $statement->bindValue(":motDePasse", $password, PDO::PARAM_STR);
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();
            $count = intval($statement->fetch()['count']);
            if (isset($count) && $count >= 1):
                $rspAccess = true;
            endif;
        } catch (Exception $exc) {
            $msg = $exc->getTraceAsString();
        }
        var_dump($rspAccess);
        return $rspAccess;
    }

    public function getDatasSession($identifiant, $password):Client {
        $Client=null;
        try {
            //
            $statement = $this->getPdo()->prepare(self::SLCT_RQST_UTLSTR_DATAS);
            $statement->bindValue(":login", $identifiant, PDO::PARAM_STR);
            $statement->bindValue(":motDePasse", $password, PDO::PARAM_STR);
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();
            $Client = new Client ($this-> extratcSuffixFromDataBases($statement->fetch()));
        } catch (Exception $exc) {
            print $exc->getTraceAsString();
        }
        return $Client;
    }

    function getPdo() {
        return $this->_pdo;
    }

    function setPdo($pdo): void {
        $this->_pdo = $pdo;
    }

    function extratcSuffixFromDataBases($array): array {
        $datas = null;
        foreach ($array as $key => $value) {
            $datas[str_replace(array("_clt"), "", $key)] = $value;
        }
        return $datas;
    }


}
