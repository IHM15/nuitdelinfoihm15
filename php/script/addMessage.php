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
    $id_event = $_GET['id_evt'];
    
    $pdo = PDOSingleton::getInstance();

} else {

}