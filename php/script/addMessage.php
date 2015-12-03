<?php
session_start();
require_once('../model/PDOSingleton.php');

/**
 * Created by PhpStorm.
 * User: nonau
 * Date: 03/12/15
 * Time: 22:35
 */

if (isset($_SESSION['id']) && isset($_GET['nom_evt']) && isset($_GET['date_deb'])
    && isset($_GET['date_fin']) && isset($_GET['resume']) && isset($_GET['description']) && $_GET['id_typeEvt']) {

    $pdo = 

} else {

}