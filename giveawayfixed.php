<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
//session_start();
require_once "./func_all.php";
// $id = $_SESSION['id'];
$user_id = 1;
if(isset($user_id)){
  $giveaway_flg = selectGiveaway($user_id);
//  dump($user_id);
//  dump($giveaway_flg);
  if($giveaway_flg[0]['flg'] == 0){
    $_SESSION['giveaway_flg'] = "あなたはゴールドではないので景品を選択できません。";
    header("Location:./giveaway.php");
    exit;
  }
  if($giveaway_flg[0]['flg'] == 2){
    $_SESSION['giveaway_flg'] = "あなたはすでに景品を選択しています。";
    header("Location:./giveaway.php");
    exit;
  }
  if(isset($_POST['fixedbtn'])){
    updateGiveawayfixed($user_id);
    $_SESSION['award_result'] = "商品を確定しました。";
  }elseif(isset($_POST['cancelbtn'])){
    header("Location:./giveaway.php");
    exit;
  }
require_once "./tpl/giveawayfixed.php";
}
?>