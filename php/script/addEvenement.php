<?php
require_once('../model/PDOSingleton.php');
/**
 * Created by PhpStorm.
 * User: Manon
 * Date: 03/12/2015
 * Time: 22:35
 */

if ( isset($_GET['nom_evt']) && isset($_GET['date_deb']) && isset($_GET['date_fin']) && isset($_GET['resume'])
    && isset($_GET['description']) && isset($_GET['id_typeEvt'])) {
    $nom_evt = $_GET['nomEvt'];
    $date_deb = $_GET['date_deb'];
    $date_fin = $_GET['date_fin'];
    $resume = $_GET['resume'];
    $description = $_GET['description'];
    $id_typeEvt = $_GET['id_typeEvt'];
    $pdo = PDOSingleton::getInstance();
    $event = $pdo->insertEvent($nom_evt,$date_deb,$date_fin, $resume, $description, $id_typeEvt);

    if ($event == TRUE) {
        header('Location: http://localhost/home.php?p=home');
    } else {
        header('Location: http://localhost/home.php?p=home&r=notinsertEvent');
    }
}
