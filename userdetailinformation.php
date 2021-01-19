<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require("func.php");
$_SESSION['user_id']=30;
$user_id=$_SESSION['user_id'];

//ユーザーの詳細情報取り出し
$user_lists=userDetail($user_id);

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


//---------------------------------
//---------投稿者詳細情報-----------
//---------------------------------
$user_select = "u.LastName AS '性', u.FirstName AS '名', u.height AS '身長', u.age AS '年齢', u.gender AS '性別', c.category_name AS 'カテゴリ名', u.profile_img AS 'プロフィール画像'";
$user_from = "user u INNER JOIN category c ON u.category_id = c.category_id";
$user_where = "u.user_id = $user_id";
$user_result = alluserId($user_select,$user_from,$user_where);

$last_name = $user_result[0][0]; //苗字
$first_name = $user_result[0][1]; //名前
$height = $user_result[0][2]; //身長
$age = $user_result[0][3]; //年齢
$gender = $user_result[0][4]; //性別
$category_name = $user_result[0][5]; //得意なカテゴリ名
$purofile_img = $user_result[0][6]; //プロフィール画像
//---------------------------------
//----------投稿一覧画像------------
//---------------------------------
$post_select = "post_id,post_img"; //表示するもの
$post_from = "post"; //テーブル
$post_where = "user_id = $user_id AND deltime IS NULL ORDER BY post_id DESC"; //表示したい会員ID
$post_result = selectPost($post_select,$post_from,$post_where); //実行して変数に代入

require("tpl/userdetailinformation.php");