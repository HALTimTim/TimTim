<?php
require("func.php");
if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['firstf']) && isset($_POST['lastf']) && isset($_POST['e-mail']) && isset($_POST['password']) && isset($_POST['passwordretype'])) {
    if ($_POST['lastname'] != '' && $_POST['firstname'] != '' && $_POST['firstf'] != '' && $_POST['lastf'] != '' && $_POST['e-mail'] != '' && $_POST['password'] != '' && $_POST['passwordretype'] != '') {
        if ($_POST['password'] == $_POST['passwordretype']) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $firstf = $_POST['firstf'];
            $lastf = $_POST['lastf'];
            $date = date("Y-m-d H:i:s");
            $email = $_POST['e-mail']; //メールアドレス
            $password = $_POST['password']; //パスワード
            list($hashId_cou, $hashId) = hashId(); //hashのidに連番を付与
            /*
            *パスワードのハッシュ化
            */
            $hashcomp = callChengeHash("$password", "randStr", "randNum", 5, 100, 1000);
            // dump($hashcomp);

            $hashlater = substr($hashcomp[0][2], 0, 5);
            $secret_id = $hashlater . '_' . $hashId[0]['hash_id + 1']; //secret_id
            // dump($secret_id);

            //メールが被ってないか判定 データが入ってないとエラー
            $table = 'user_secret';
            $select = array('pass', 'mail');
            list($cou, $ary) = sqlList($select, $table);
            $err = 0; //エラー判別
            for ($i = 0; $i < $cou; $i++) {
                if ($email == $ary[$i]['mail']) { //メールアドレスが同じか判別
                    $err = 1; //エラー判定
                }
            }
          $reg_str = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
          if (preg_match($reg_str, $email)) {
            $err_email = 1;
          }else{
            $err_email = 0;
          }
//          $err=1;
            if ($err == 0) {
                if($err_email==1){
                  //hashへのinsert
                  $prepare = array('hash_id', 'secret_id', 'original_pass', 'salt', 'rotation');
                  hashInsert('hash', $prepare, $hashId[0]['hash_id + 1'], $secret_id, $password, $hashcomp[0][0], $hashcomp[0][1]);

                  $prepare = array('secret_id', 'hash_id', 'pass', 'mail');
                  insertSignup('user_secret', $prepare, $secret_id, $hashId[0]['hash_id + 1'], $hashcomp[0][2], $email); //insert パスワード,メールアドレス

                  $prepare = array('user_id', 'secret_id', 'category_id', 'LastName', 'FirstName', 'LastName_F', 'FirstName_F', 'profile_img', 'header_img', 'user_city', 'sales_user_id', 'purchase_user_id', 'StartDate');
                  sqlInsert('user', $prepare, $hashId[0]['hash_id + 1'], $secret_id, 'C1', $lastname, $firstname, $lastf, $firstf, '-', '-', '-', $hashId[0]['hash_id + 1'], $hashId[0]['hash_id + 1'], $date);

                  header('Location: login.php');
                  exit(); 
                }else{
                  $err = '正しくないメールアドレスです';
                }
            } else {
                $err = 'メールアドレスがすでに使われています';
            }
        } else {
            $err = 'パスワードが一致していません';
        }
    } else {
        $err = '入力してください';
    }
} else {
    $err = '入力してください';
}

require("tpl/signup.php");