<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require("func.php");

  if(isset($_GET[$name])){
    $comment = $_GET[$name];
    echo $comment;
  }

require("tpl/topselect.php");