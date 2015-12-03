<?php
require_once('../model/PDOSingleton.php');
session_start();
/**
 * Created by PhpStorm.
 * User: nonau
 * Date: 03/12/15
 * Time: 20:48
 */

if (isset($_POST['login']) && isset($_POST['motDePasse'])) {
    $login = $_POST['login'];
    $pass = $_POST['motDePasse'];
    $pdo = PDOSingleton::getInstance();
    $user = $pdo->query('SELECT * FROM personne WHERE mail='.$login)->fetch();
    $passCrypted = md5($pass);
    if ($login == $user['ID_PERS'] && $passCrypted == $passCrypted['MDP']) {
        $_SESSION['login'] = $login;
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/login.php');
    } else {
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/login.php?r=wrong');
    }
} else {
    echo "error";
}