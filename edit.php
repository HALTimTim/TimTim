<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require_once "./func_all.php";
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
//------------投稿変更--------------
//---------------------------------

if (!empty($_POST['id'])) {
  if (isset($_FILES['upload_file']) || isset($_POST["user_text"])) { //postで変更ボタンが押された場合
    $post_id = $_POST['id'];
    dump($post_id);
    if (!($_FILES["upload_file"]["name"] == "") && !($_POST["user_text"] == "")) //キャプション、画像ともに変更の場合
    {
      $upload_file = $_FILES['upload_file']; //受け取った値を代入（画像）
      $caption = $_POST['user_text']; //受け取った値を代入（キャプション）
      updateCaption($caption, $post_id); //キャプション変更
      updateCapimg($post_img, $post_id); //画像変更
    } elseif (!($_POST["user_text"] == "")) //キャプションのみ変更の場合
    {
      $caption = $_POST["user_text"];
      updateCaption($caption, $post_id); //キャプション変更
    } elseif (!($_FILES["upload_file"]["name"] == "")) //画像のみ変更の場合
    {
      $upload_file = $_FILES['upload_file'];
      $capming_select_result = selectCapimg($post_id);
      $post_img = move_uploaded_file($upload_file['tmp_name'], './src/img/POST_img/'.$capming_select_result[0]["post_img"].'.png');
      // $aaa = move_uploaded_file($upload_file['tmp_name'], './img/POST_img/' . $val5 . '.' . '' . $extension . '');
      dump($post_img);
      // updateCapimg($post_img, $post_id); //画像変更
    } else {
      echo "変更するデータはありませんでした。";
    }
  }
}



//---------------------------------
//----------投稿一覧画像------------
//---------------------------------
$post_select = "post_id,post_img"; //表示するもの
$post_from = "post"; //テーブル
$post_where = "user_id = $user_id AND deltime IS NULL ORDER BY post_id DESC"; //表示したい会員ID
$post_result = selectPost($post_select, $post_from, $post_where); //実行して変数に代入

//---------------------------------
//------------投稿選択--------------
//---------------------------------
if (isset($_GET['id'])) {
  $post_choise_id = $_GET['id']; //
  $post_select_choise = "post_img,caption"; //表示するもの
  $post_from_choise = "post"; //テーブル
  $post_where_choise = "user_id = $user_id AND post_id = $post_choise_id"; //表示したい会員idの選択した投稿
  $post_result_choise = selectPostchoise($post_select_choise, $post_from_choise, $post_where_choise);
  $choise_img = $post_result_choise[0][0]; //ユーザーが選択した画像
  $choise_caption = $post_result_choise[0][1]; //ユーザーが選択したキャプション
  // dump($post_result_choise);
}

//---------------------------------
//-----------フォロワー計算---------
//---------------------------------
$follower_num = follow_Count('user_id,COUNT(follower_id)', $user_id);
$ster_num = ster_count($user_id);
require_once "./tpl/edit.php";

//postテーブルのpost_id最大値
