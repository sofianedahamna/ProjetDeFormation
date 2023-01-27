<?php

namespace application\controller;

use Adresse;
use PDOFactory;
use ClientManager;
use Client;

//header('Content-Type: application/json');

include_once '../libraries/autoloader.php';

function getParamsInit()
{
    return parse_ini_file("../Config/bdd.ini");
}

function extractDatasFromForm($superGlobal): array
{
    $datas = null;
    foreach ($superGlobal as $key => $value) {
        $datas[str_replace(array("_utlstr"), "", $key)] = $value;
    }
    return $datas;
}

function sp_global_extract_datas_with_pattern(array $super_gb, array $tab_patterns)
{
    $tab = $super_gb;
    foreach ($tab_patterns as $pattern) {
        foreach ($tab as $key => $value) {
            if (preg_match($pattern, $key)) :
                $tab[preg_replace($pattern, "", $key)] = trim($value);
                unset($tab[$key]);
            endif;
        }
    }
    return $tab;
}

function inscrire(): void
{
    if (
        isset($_POST)
        && isset($_POST["nom_utlstr"]) && !empty($_POST["nom_utlstr"])
        && isset($_POST["prenom_utlstr"])  && !empty($_POST["prenom_utlstr"])
        && isset($_POST["email_utlstr"])  && !empty($_POST["email_utlstr"])
        && isset($_POST["telephone_utlstr"])  && !empty($_POST["telephone_utlstr"])
        && isset($_POST["motDePasse_utlstr"])  && !empty($_POST["motDePasse_utlstr"])
        && isset($_POST["dateDeNaissance_utlstr"])   && !empty($_POST["dateDeNaissance_utlstr"])
    ) {

        //var_dump($_POST);
        //echo json_encode($_POST);

        $datas = extractDatasFromForm($_POST);
        //$motDePasse = $_POST['motDePasse_utlstr'];
        //$password_hash = password_hash($motDePasse, PASSWORD_DEFAULT);
        //$datas['motDePasse_utlstr'] = $password_hash;

        //var_dump($datas);
        //$datas = sp_global_extract_datas_with_pattern($_POST, ["/_utlstr/"]);
        $Client = new Client($datas);
        $Adresse = new Adresse($datas);
        $PDOFactory = new PDOFactory(getParamsInit(), true);

        //var_dump($PDO->getPDO());
        //var_dump($Client);
        //var_dump($Adresse);
        $ClientManager = new ClientManager($PDOFactory->getPDO());
        $response =  $ClientManager->add($Client, $Adresse);
        json_encode($response);
        echo json_encode($response);
        //var_dump($response);
    }
}


if (isset($_POST['action'])) {
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
