<?php
session_start();
require_once('../model/PDOSingleton.php');

/**
 * Created by PhpStorm.
 * User: Manon
 * Date: 03/12/2015
 * Time: 21:21
 */
print_r($_POST);
if (isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom'])
    && isset($_POST['tel'])) {
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $dv = isset($_POST['dv']) ? true : false;
    $pdo = PDOSingleton::getInstance();
    print_r("test");
    $user = $pdo->insertPersonne($nom, $prenom, $mail, $tel, $mdp, $dv);
    if ( $user == TRUE ) {
        $_SESSION['mail'] = $mail;
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/index.php?p=home');
    } else {
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/index.php?p=signup&r=notinsertPersonne');
    }
} else {
    echo "error";

}