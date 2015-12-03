<?php
require_once('../model/PDOSingleton.php');
session_start();
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
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/login.php');
    } else {
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/login.php?r=wrong');
    }
} else {
    echo "error";
}