<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require("tpl/buyproduct.php");