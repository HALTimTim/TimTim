<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
//session_start();
// $id = $_SESSION['id'];
require_once "./func_all.php";
//var_dump($_SESSION);
$lists = sqlList('award');

require_once "./tpl/giveaway.php";
?>