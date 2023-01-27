<?php

include_once '../libraries/autoloader.php';

//Autoloader::register();
//use PDOFactory;

function getParamsInit() {
    return parse_ini_file("../Config/bdd.ini");
}


function login() {
    $identifiant = htmlspecialchars($_POST['identifiant']);
    var_dump($identifiant);
    $password = htmlspecialchars($_POST['motDePasse']);
    var_dump($password);
    $PDOFactory = new PDOFactory(getParamsInit(), true);
    $ManagerCompte = new ManagerAuthentificationClient($PDOFactory->getPDO());
    var_dump($ManagerCompte);
    if ($ManagerCompte->access($identifiant, $password)):
        $datasSession = $ManagerCompte->getDatasSession($identifiant, $password);
        getCurrentSession($datasSession);
        header("Location:http://meysongles.fr/application/view/compteClient.php");
    else :
        //Route::defaultRedirection();
        header("Location:http://meysongles.fr/application/view/authenticationClient.php");
    endif;
}

function getCurrentSession(Client $client): void {
    session_start();
    $_SESSION['nom_clt']= $client->getnom();
    $_SESSION['prenom_clt']= $client->getprenom();
    $_SESSION['access_ctrl'] = session_id();
}

function logout() {
    //Code à ecrire
    unset($_SESSION);
    Route::defaultRedirection();
}

if (isset($_POST['action'])) :
    switch ($_POST['action']) {
        case "login":
            login();
            break;
        case "logout":
            logout();
            break;
        default:
            // Route::defaultRedirection();
            break;
    } else:
    Route::defaultRedirection();
    endif;




    