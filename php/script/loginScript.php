<?php
session_start();
require_once('../model/PDOSingleton.php');

/**
 * Created by PhpStorm.
 * User: nonau
 * Date: 03/12/15
 * Time: 20:48
 */

if (isset($_POST['mail']) && isset($_POST['mdp'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['mdp'];
    $pdo = PDOSingleton::getInstance();
    $user = $pdo->selectPersonne($mail);
    $passCrypted = md5($pass);
    if ($mail == $user['mail'] && $passCrypted == $user['mdp']) {
        $_SESSION['mail'] = $mail;
        $_SESSION['id'] = $user['id_personne'];
        header('Location: http://nuitdelinfoihm15.arnaudgrima.fr/index.php?p=home');
    } else {
        header('Location: http://nuitdelinfoihm15.arnaudgrima.fr/index.php?p=login&r=wrong');
    }
} else {
    echo "error";
}