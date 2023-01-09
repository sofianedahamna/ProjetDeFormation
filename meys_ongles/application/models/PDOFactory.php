<?php


/**
 * Description of PDOFactory
 *
 * @author Dahamna sofiane
 */
class PDOFactory {

    private $_dsn;
    private $_user;
    private $_pwd;
    private $_opt_persistent = [];
    private $_err_manager;
    private $_pdo = null;

    function __construct(array $datasConnexion, bool $persistent) {
        $this->hydrate($datasConnexion);
        if ($persistent)
            $this->_opt_persistent = array(\PDO::ATTR_PERSISTENT => true);
    }

    function hydrate($params) {
        foreach ($params as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getPDO() {
        if (is_null($this->_pdo)) {
            $this->_pdo = new \PDO($this->getDsn(), $this->getUser(), $this->getPwd(), $this->getOpt_persistent());
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->_pdo;
    }

    function getDsn() {
        return $this->_dsn;
    }

    function getUser() {
        return $this->_user;
    }

    function getPwd() {
        return $this->_pwd;
    }
    
    function setDsn($dsn): void {
        $this->_dsn = $dsn;
    }

    function setUser($user): void {
        $this->_user = $user;
    }

    function setPwd($pwd): void {
        $this->_pwd = $pwd;
    }

    
    function getOpt_persistent() {
        return $this->_opt_persistent;
    }

    function getErr_manager() {
        return $this->_err_manager;
    }

}
