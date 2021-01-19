<?php
require("func.php");
require("func_login.php");
$user_id=login($_SESSION['user_id']);

//ユーザーの詳細情報取り出し
$user_lists=userDetail(120);


//フォロワー
$user_folower=folower($user_id);

//評価
$user_star=star($user_id);

//バッジ
$badge_folower=$user_folower[0]['COUNT(user_id)'];
if($badge_folower < 100){
  $badge = 'dou';
}elseif($badge_folower < 1000){
  $badge = 'gin';
}elseif($badge_folower < 10000){
  $badge = 'kin';
}

//体重と郵便番号
$user_weight_post=wheightPostid($user_id);

//郵便番号を分ける
$post1 = substr($user_weight_post[0]['user_postalcode'], 0, 3);
$post2 = substr($user_weight_post[0]['user_postalcode'], 3, 6);


//性別判別
if ($user_lists[0]['gender'] == 'M') {
  $gender = '男性';
} elseif ($user_lists[0]['gender'] == 'F') {
  $gender = '女性';
} else {
  $gender = 'その他';
}

//カテゴリーの抽出
$categorys=cateName();


require("tpl/userdetailinformationentry.php");