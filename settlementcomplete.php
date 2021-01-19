<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require("func.php");

$id = $_POST['id'];
$sales_code = $_POST['sales_code'];

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

$table = 'purchase';
$select = array('*');
$where = "IN($sales_code)"; //ORで指定
list($purchase_cou, $purchase) = purchaseUser($select, $table, $where);
$set[] = substr($purchase[0]['settlement_complete_time'], 0, 4) . '年';
$set[] = substr($purchase[0]['settlement_complete_time'], 5, 2) . '月';
$set[] = substr($purchase[0]['settlement_complete_time'], 8, 2) . '日';
$set = implode($set);
require("tpl/settlementcomplete.php");