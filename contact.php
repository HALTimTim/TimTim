<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
date_default_timezone_set('Asia/Tokyo');
require_once './func_all.php';
$user_id = 1; //仮ユーザーid
if (isset($_POST['name'], $_POST['mail'], $_POST['contact'])) {
    //---------------------------------
    //----ファイルを読み込んで分割------
    //---------------------------------
    $ary = [];
    $fp = fopen('./csv/contact.csv', 'r'); //csvファイルから読み込む
    $val = fgets($fp); //一行取得を変数へ
    while ($val) {
        $ary[] = explode(',', $val);
        $val = fgets($fp);
    }
    fclose($fp);
    //---------------------------------
    //------主キーの最大値を求める------
    //---------------------------------
    $max_num = 0;
    foreach ($ary as $num) {
        if ($num[0] > $max_num) {
            $max_num = $num[0];
        }
    }
    //---------------------------------
    //-----主キーの最大値に1を追加------
    //---------------------------------
    $primary_key = $max_num + 1;
    //---------------------------------
    //---csvファイルに追記で書き込む----
    //---------------------------------
    $ary = array($primary_key, $user_id, $_POST['name'], $_POST['mail'], $_POST['contact'], date("Y/m/d H:i:s"));
    $csv_write = implode(",", $ary);
    $fp = fopen("./csv/contact.csv", "a");
    fwrite($fp, $csv_write . "\r\n");
    fclose($fp);
    //---------------------------------
    //-----更新しても追加できない用-----
    //---------------------------------
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("Location:./contact.php");
        exit;
    }
}
require_once './tpl/contact.php';