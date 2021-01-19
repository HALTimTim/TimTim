<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require("func.php");
$id = $_POST['id'];
$sales_code = $_POST['sales_code'];

//販売idと同じidのユーザー情報取り出し
$table = 'user';
$select = array('*');
$where = "IN($id)"; //ORで指定
list($user_cou, $user) = sqlUser($select, $table, $where);

$category_id = $user[0]['category_id'];

$table = 'category';
$select = array('*');
list($category_cou, $category) = sqlCategory($select, $table, $category_id);

//名前を一文にする
for ($i = 0; $i < $user_cou; $i++) {
    $name[] = $user[$i]['LastName'];
    $name[] = $user[$i]['FirstName'];
    $fulname[] = implode($name);
}

//販売コード一致
$table = 'sales_code';
$select = array('*');
$where = "IN($sales_code)"; //ORで指定
list($sales_cou, $sales) = saleUser($select, $table, $where);
// dump($sales);
$date[] = substr($sales[0]['始まりの時間'], 0, 4) . '年';
$date[] = substr($sales[0]['始まりの時間'], 5, 2) . '月';
$date[] = substr($sales[0]['始まりの時間'], 8, 2) . '日';
$date = implode($date);
$time[] = substr($sales[0]['始まりの時間'], 10, 6);
$time[] = substr($sales[0]['30分後の時間'], 10, 6);
// dump($date);
// dump($time);
// echo $sales[0]['30分後の時間'];
require("tpl/claim.php");