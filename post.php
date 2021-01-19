<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require_once "./func_all.php";
//---------------------------------
//------sessionid受け取り-----------
//---------------------------------
$user_id = 7; //仮のid
//---------------------------------
//------postで受け取ったとき--------
//---------------------------------
$re = rename_img($user_id);
$re = $re[0]['re_img'];

if (isset($_FILES['upload_file'])) {

  $upload_file = $_FILES['upload_file']; //受け取った値を代入
  $user_text = $_POST['user_text']; //受け取った値を代入

  $comment_name = "comment_id"; //commentテーブルのカラム
  $column_name = "post_id,user_id,comment_id,category_id,post_img,post_video,caption,Posttime"; //Posttimeをdb貰ったらposttimeにする
  $now_time = date("Y-m-d_H-i-s"); //現在時間
  $post_select_id = postSelectId(); //関数を変数に代入
  $post_id = intval($post_select_id[0][0]); //stringをintに型変換
  $comment_select_id = commentSelectId(); //関数を変数に代入
  $comment_id = intval($comment_select_id[0][0]); //stringをintに型変換


  //---------------------------------
  //--------valueへ入力する値---------
  //---------------------------------
  $val1 = $post_id; //post_id
  $val2 = $user_id; //user_id
  $val3 = $comment_id; //comment_id
  $val4 = "C1"; //category_id
  $val5 = "$user_id" . '_' . "$re"; //post_img
  $val6 = "$user_id" . '_' . "$re"; //post_video
  $val7 = "$user_text"; //caption
  $val8 = date("YmdHis");
  //---------------------------------
  //------insert文テンプレート--------
  //---------------------------------
  $result = commentInsert("comment", $comment_name, $val3);
  $result = postInsert("post", $column_name, $val1, $val2, $val3, $val4, $val5, $val6, $val7 ,$val8);
  $img_name = explode('.', $upload_file['name']);
  $extension = end($img_name);
  $aaa = move_uploaded_file($upload_file['tmp_name'], './src/img/POST_img/' . $val5 . '.' . '' . $extension . '');
  header("Location: ./posted.php");
  exit;
}
require_once "./tpl/post.php";