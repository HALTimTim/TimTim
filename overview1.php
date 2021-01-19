<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
session_start();
require_once "./func_all.php";

require_once "./tpl/overview1.php";
?>