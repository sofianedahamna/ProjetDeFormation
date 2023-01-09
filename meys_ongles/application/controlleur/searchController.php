<?php


namespace application\controller;

require_once '../libraries/autoloader.php';
use ClientManager;
use PDOFactory;
use PrestationManager;
use RealisationManager;


function getParamsInit() {
    return parse_ini_file("../Configuration/bdd.ini");
}


function rechercheClient() {
    if (isset($_POST["keyword"])) {
        $keyword = htmlspecialchars($_POST["keyword"]);
        $PDOFactory = new PDOFactory(getParamsInit(), true);
        $AcheteurManager = new ClientManager($PDOFactory->getPDO());
        $listeAcheteurs = $AcheteurManager->get($keyword);
        if (!empty($listeAcheteurs)):
            echo json_encode($listeAcheteurs);
        else:
            echo json_encode(false);
        endif;
    }
}
function rechercherPresta() {
    if (isset($_POST["keyword"])) {
        $keyword = htmlspecialchars($_POST["keyword"]);
        $PDOFactory = new PDOFactory(getParamsInit(), true);
        $PrestationManager = new PrestationManager($PDOFactory->getPDO());
        $listePrestation = $PrestationManager->get($keyword);
        if (!empty($listePrestation)):
            echo json_encode($listePrestation);
        else:
            echo json_encode(false);
        endif;
    }
}

function rechercherRea() {
    if (isset($_POST["keyword"])) {
        $keyword = htmlspecialchars($_POST["keyword"]);
        $PDOFactory = new PDOFactory(getParamsInit(), true);
        $RealisationManager = new RealisationManager($PDOFactory->getPDO());
        $listeRealisation =  $RealisationManager->get($keyword);
        if (!empty($listeRealisation)):
            echo json_encode($listeRealisation);
        else:
            echo json_encode(false);
        endif;
    }
}


if (isset($_POST['action'])) {;
    switch ($_POST['action']) {
        case "rechercherClient":
            rechercheClient();
            break;
        case "rechercherPresta":
            rechercherPresta();
            break;
        case "rechercheRea":
           rechercherRea();
            break;
        case  "" :
            ;
            
            break;
    }
}
