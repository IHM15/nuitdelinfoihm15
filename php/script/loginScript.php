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
    $mail = $_POST['login'];
    $pass = $_POST['motDePasse'];
    $pdo = PDOSingleton::getInstance();
    $user = $pdo->selectPersonne($mail);
    $passCrypted = md5($pass);
    if ($mail == $user['mail'] && $passCrypted == $passCrypted['mdp']) {
        $_SESSION['mail'] = $mail;
        $_SESSION['id'] = $user['id_personne'];
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/index.php?p=login');
    } else {
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/login.php?p=login&r=wrong');
    }
} else {
    echo "error";
}