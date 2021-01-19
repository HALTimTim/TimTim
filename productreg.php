<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require_once "./func.php";


require_once "./tpl/productreg.php";
?>