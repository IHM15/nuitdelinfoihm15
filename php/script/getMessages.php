<?php
/**
 * Created by PhpStorm.
 * User: nonau
 * Date: 04/12/15
 * Time: 00:31
 */

require_once('../model/PDOSingleton.php');

$pdo = PDOSingleton::getInstance();

$messages = $pdo->getThreeLastMessages();

echo json_encode($messages);