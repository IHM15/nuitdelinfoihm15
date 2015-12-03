<?php
session_start();
require_once('../model/PDOSingleton.php');

/**
 * Created by PhpStorm.
 * User: Manon
 * Date: 03/12/2015
 * Time: 21:21
 */

if (isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom'])
    && isset($_POST['tel']) && isset($_POST['dv'])) {
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $dv = $_POST['dv'];
    $pdo = PDOSingleton::getInstance();
    $user = $pdo->insertPersonne($nom, $prenom, $mail, $tel, $mdp, $dv);
    if ( $user == TRUE ) {
        $_SESSION['mail'] = $mail;
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/login.php');
    } else {
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/login.php?r=notinsert');
    }
}