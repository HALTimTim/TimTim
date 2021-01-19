<?php
require("func.php");
session_start();
if (isset($_POST['mail']) && isset($_POST['password'])) {
  if ($_POST['mail'] != '' && $_POST['password'] != '') {
    // パスワードを入力してください
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $table = 'user_secret';
    $select = array('*');
    list($secret_cou, $secret) = sqlList($select, $table);

    $table = 'hash';
    $select = array('*');
    list($hash_cou, $hash) = sqlList($select, $table);
    $err = 0;
    for ($i = 0; $i < $secret_cou; $i++) {
      if ($secret[$i]['mail'] == $mail) {
        $hashid = $secret[$i]['hash_id']; //id取り出し
        for ($o = 0; $o < $hash_cou; $o++) {
          if ($hash[$o]['hash_id'] == $hashid) {
            $solt = $hash[$o]['salt']; //ソルト取得
            $cnt = $hash[$o]['rotation']; //ループ回数取得
            for ($t = 1; $t <= $cnt; $t++) {
              $pass = $solt . $pass; //パスワードに特定の文字連結
              $pass = md5($pass);
            }
            $ary[] = [$solt, $cnt, $pass];

            if ($ary[0][2] == $secret[$i]['pass']) {
              $err = 1;
              $user_id=user_id($ary[0][2]);
            
              $_SESSION['user_id']=$user_id[0]['user_id'];
              
              header('Location:top.php');
              exit();
              
            }
          }
        }
      }
    }
    if ($err == 1) {
      $err = 'ログイン成功';
      // header('Location: top.php');
    } else {
      $err = 'パスワードまたはメールアドレスが違います';
    }
  } else {
    $err = '入力してください';
  }
} else {
  $err = '入力して下しさい';
}
require("tpl/login.php");