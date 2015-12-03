<?php
session_start();
require_once('../model/PDOSingleton.php');

/**
 * Created by PhpStorm.
 * User: nonau
 * Date: 03/12/15
 * Time: 22:35
 */

if (isset($_GET['id_evt']) && isset($_GET['time_msg']) && isset($_GET['img_blob']) && isset($_GET['text'])) {
    $id_evt = $_GET['id_evt'];
    $time_msg = $_GET['time_msg'];
    $img_blob = $_GET['img_blob'];
    $text = $_GET['text'];
    $pdo = PDOSingleton::getInstance();
    $message = $pdo->addMessage($_SESSION['id'],$id_evt,$time_msg,$img_blob,$text);

    if ($message == TRUE) {
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/home.php?p=home');
    } else {
        header('Location: http://www.nuitdelinfoihm15.arnaudgrima.fr/home.php?p=home&r=notinsertMessage');
    }
}