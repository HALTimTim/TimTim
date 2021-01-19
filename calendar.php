<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require("func.php");
$id = $_POST['id'];

//販売idと同じidのユーザー情報取り出し
$table = 'user';
$select = array('*');
$where = "IN($id)"; //ORで指定
list($user_cou, $user) = sqlUser($select, $table, $where);

$category_id = $user[0]['category_id'];

$table = 'category';
$select = array('*');
list($category_cou, $category) = sqlCategory($select, $table, $category_id);
// dump($category);

//名前を一文にする
for ($i = 0; $i < $user_cou; $i++) {
    $name[] = $user[$i]['LastName'];
    $name[] = $user[$i]['FirstName'];
    $fulname[] = implode($name);
}

//販売コード一致
$table = 'sales_code';
$select = array('*');
$where = "IN($id)"; //ORで指定
list($salesId_cou, $salesId) = saleId($select, $table, $where);
$set[] = substr($salesId[0]['sales_time'], 8, 2);
// dump($salesId);
$sales_code = $salesId[0]['sales_code'];
// dump($sales_code);
$table = 'sales_code';
$select = array('*');
$where = "IN('$sales_code')"; //ORで指定
list($sales_cou, $sales) = saleUser($select, $table, $where);
// dump($sales);
$start[] = substr($sales[0]['始まりの時間'], 0, 4) . '年';
$start[] = substr($sales[0]['始まりの時間'], 5, 2) . '月';
$start[] = substr($sales[0]['始まりの時間'], 8, 2) . '日';
$start = implode($start);
$time[] = substr($sales[0]['始まりの時間'], 10, 6);
$time[] = substr($sales[0]['30分後の時間'], 10, 6);
// dump($time);

require("tpl/calendar.php");