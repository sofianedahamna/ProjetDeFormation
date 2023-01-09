<?php

namespace application\controller;

use PDOFactory;
use Prestation;
use PrestationManager;

//header('Content-Type: application/json');

include_once '../libraries/autoloader.php';

function getParamsInit() {
    return parse_ini_file("../Configuration/bdd.ini");
}

function extractDatasFromForm($superGlobal): array {
    $datas = null;
    foreach ($superGlobal as $key => $value) {
        $datas[str_replace(array("_presta"), "", $key)] = $value;
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

function ajoutPresta(): void {
    if (isset($_POST))
        //var_dump($_POST);
        //echo json_encode($_POST);

    $datas = extractDatasFromForm($_POST);
    //var_dump($datas);
    //$datas = sp_global_extract_datas_with_pattern($_POST, ["/_utlstr/"]);
    $Presta = new Prestation($datas);
    $PDOFactory = new PDOFactory(getParamsInit(), true);

    //var_dump($PDO->getPDO());
    //var_dump( $Presta);
    $PrestaManager = new PrestationManager($PDOFactory->getPDO());
    $response=   $PrestaManager->add($Presta);
    json_encode($response);
}


if(isset($_POST['action'])){
switch ($_POST['action']) {
    case "ajoutPresta":
        ajoutPresta();
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
