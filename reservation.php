<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require("func.php");

//販売ユーザーid取り出し
$table = 'sales_user';
$select = array('user_id');
list($sales_cou, $sales_ary) = sqlList($select, $table);
$page = ceil($sales_cou / 2);

//ユーザidを一つの配列に入れる
for ($i=0; $i < $sales_cou; $i++) {
  $sales_list[] = $sales_ary[$i]['user_id'];
}
  $sales_list = implode(',',$sales_list);//ユーザーidを , 区切りで一列にする

//販売idと同じidのユーザー情報取り出し
$table = 'user';
$select = array('*');
$where = "IN($sales_list)";//ORで指定
list($user_cou, $user) = sqlUser($select, $table,$where);
// dump($user);

//カテゴリid指定取り出し
for ($i=0; $i < $user_cou; $i++) {
  $user_list[] = $user[$i]['category_id'];
}
  $user_list = implode(',',$user_list);

// $table = 'category';
// $select = array('*');
// $where = "IN($user_list)";//ORで指定
// list($cou_category, $category) = sqlCate($select, $table,$where);
// dump($category);

//名前を一文にする
for ($i=0; $i < $user_cou; $i++) {
  $name = [];
  $name[] = $user[$i]['LastName'];
  $name[] = $user[$i]['FirstName'];
  $fulname[] = implode($name);
}

$totalPage = $page;
$range = 3;
if (
 isset($_GET["page"]) &&
 $_GET["page"] > 0 &&
 $_GET["page"] <= $totalPage
) {
 $page = (int)$_GET["page"];
} else {
 $page = 1;
}

$prevDiff = 0;
if ($page - $range < 1) {
 $prevDiff = $range - $page + 1;
}

$nextDiff = 0;
if ($page + $range > $totalPage) {
 $nextDiff = $page + $range - $totalPage;
}
require("tpl/reservation.php");
?>