<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
$id = $_POST['id'];
$sales_code = $_POST['sales_code'];
$year_date = date('Y');
require("tpl/payment.php");