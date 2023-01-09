<?php

namespace application\controller;

use PDOFactory;
use ClientManager;
use Client;

//header('Content-Type: application/json');

include_once '../libraries/autoloader.php';

function getParamsInit() {
    return parse_ini_file("../Configuration/bdd.ini");
}

function extractDatasFromForm($superGlobal): array {
    $datas = null;
    foreach ($superGlobal as $key => $value) {
        $datas[str_replace(array("_utlstr"), "", $key)] = $value;
    }
    return $datas;
}

function sp_global_extract_datas_with_pattern(array $super_gb, array $tab_patterns) {
    $tab = $super_gb;
    foreach ($tab_patterns as $pattern) {
        foreach ($tab as $key => $value) {
            if (preg_match($pattern, $key)):
                $tab[preg_replace($pattern, "", $key)] = trim($value);
                unset($tab[$key]);
            endif;
        }
    }
    return $tab;
}

function inscrire(): void {
    if (isset($_POST))
        //var_dump($_POST);
//      echo json_encode($_POST);

    $datas = extractDatasFromForm($_POST);
    //var_dump($datas);
    //$datas = sp_global_extract_datas_with_pattern($_POST, ["/_utlstr/"]);
    $Client = new Client($datas);
    $PDOFactory = new PDOFactory(getParamsInit(), true);

    //var_dump($PDO->getPDO());
    //var_dump($Client);
    //var_dump($Adresse);
    $ClientManager = new ClientManager($PDOFactory->getPDO());
    $response=  $ClientManager->add($Client);
    json_encode($response);
}


if(isset($_POST['action'])){
switch ($_POST['action']) {
    case "inscription":
        inscrire();
        break;
    case "suppression":

        break;
    case "modifier":
        
        break;
    default:
//home();
        break;
}
}

