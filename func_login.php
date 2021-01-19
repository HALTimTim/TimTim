<?php
session_start();

function login($user_id){
if (@$user_id=='') {
header('Location:login.php');
exit();
}
if (@$_POST['logout']) {
unset($user_id);
header('Location:login.php');
exit();
}
$user_id=$user_id;
return $user_id;
}