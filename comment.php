<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require_once "./func_all.php";
// $session = 25; //ログインしている人のid
// postedから選択したidを送れるようにする。
$user_id = 7; //見られている側の人のid
$post_id = 1; //posted.phpから受け取った投稿id
$comment_id = $post_id; //post_idとcomment_idは同じ。

//---------------------------------
//---------投稿者詳細情報-----------
//---------------------------------
$user_select = "u.LastName AS '性', u.FirstName AS '名', u.height AS '身長', u.age AS '年齢', u.gender AS '性別', c.category_name AS 'カテゴリ名', u.profile_img AS 'プロフィール画像'";
$user_from = "user u INNER JOIN category c ON u.category_id = c.category_id";
$user_where = "u.user_id = $user_id";
$user_result = userId($user_select,$user_from,$user_where);
// dump($coment);
//---------------------------------
//---------投稿者詳細情報-----------
//---------------------------------
$user_select = "u.LastName AS '性', u.FirstName AS '名', u.height AS '身長', u.age AS '年齢', u.gender AS '性別', c.category_name AS 'カテゴリ名', u.profile_img AS 'プロフィール画像'";
$user_from = "user u INNER JOIN category c ON u.category_id = c.category_id";
$user_where = "u.user_id = $user_id";
$user_result = userId($user_select, $user_from, $user_where);

$last_name = $user_result[0][0]; //苗字
$first_name = $user_result[0][1]; //名前
$height = $user_result[0][2]; //身長
$age = $user_result[0][3]; //年齢
$gender = $user_result[0][4]; //性別
$category_name = $user_result[0][5]; //得意なカテゴリ名
$purofile_img = $user_result[0][6]; //プロフィール画像

//---------------------------------
//----------コメント追加------------
//---------------------------------
if(isset($_POST['comment'])){
  $com_count = commentEnd($comment_id); //コメントの最終行を取得
  $com_count_end = $com_count["COUNT(comment_id)+1"];

  $comment = $_POST['comment']; //受け取ったコメントを代入
  $column_name = "comment_id,parent_comment_id,user_id,comment,post_time"; //カラム名
  $val1 = $comment_id;
  $val2 = "$comment_id"."_"."$com_count_end";
  $val3 = $user_id;
  $val4 = $comment;
  $val5 = date('YmdHis');
  dump($val1);
  dump($val2);
  dump($val3);
  dump($val4);
  dump($val5);

  $comment_post = commentPost($column_name,$val1,$val2,$val3,$val4,$val5); //それぞれ代入して実行
  dump($comment_post);
}

//---------------------------------
//------選択された投稿の画像--------
//---------------------------------
$comment_choise_img = commentChoiseimg($post_id); //選択した画像のpost_imgを出して変数に代入
dump($comment_choise_img["post_img"]);

//---------------------------------
//--------コメント全件表示----------
//---------------------------------
$comment_all = commentAll($comment_id);
//---------------------------------
//-----------フォロワー計算----------
//---------------------------------
$follower_num = follow_Count('user_id,COUNT(follower_id)', $user_id);
$ster_num = ster_count($user_id);
require_once "./tpl/comment.php";
