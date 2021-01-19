<?php
require("const.php");
//-----------------------------------
//--------------vardamp--------------
//-----------------------------------
/**
 * 第一引数 vardampしたい変数
 */
//-----------------------------------
function dump($result)
{
  echo '<pre>';
  var_dump($result);
  echo '</pre>';
}

//-----------------------------------
//-------DB接続エラー処理-------------
//-----------------------------------
/**
 * 第一引数 接続した変数
 */
//-----------------------------------
function sqlListerr($link)
{
  if (!$link) {
    $err_msg = '予期せぬエラーが発生しました。しばらくたってから再度お試しください。(エラーコード：103)';
    require_once './tpl/error.php';
    exit;
  }
}
//-----------------------------------
//----------結果エラー処理------------
//-----------------------------------
/**
 * sql result例外処理
 * [関数名]:sqlResulterr
 * 第1引数: $link
 * 第2引数: $result
 */
//-----------------------------------
function sqlResulterr($link, $result)
{
  if (!$result) { //エラー処理
    mysqli_close($link);
    $err_msg = '予期せぬエラーが発生しました。しばらくたってから再度お試しください。(エラーコード：104)';
    require_once './tpl/error.php';
    exit;
  }
}

//-----------------------------------
//------sql接続・接続エラー処理--------
//-----------------------------------
/**
 * sql接続を行う
 * [関数名]:sqlIntial
 */
//-----------------------------------
function sqlInitial()
{
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  sqlListerr($link); //sql接続　link例外処理
  return $link;
}

//-----------------------------------
//-------------降順出力---------------
//-----------------------------------
/**
 * ソート降順
 * [関数名]:sordDesc
 * 第1引数: 配列
 * 第2引数: ソートしたい要素
 */
//-----------------------------------
function sortDesc($ary, $colum)
{
  foreach ($ary as $value) {
    $sort[] = $value[$colum];
  }
  array_multisort($sort, SORT_DESC, $ary);
  var_dump($ary);
}

//-----------------------------------
//-------------昇順出力---------------
//-----------------------------------
/**
 * ソート昇順
 * [関数名]:sordAsc
 * 第1引数: ソートしたい要素が入っている配列
 * 第2引数: ソートしたい要素  例)name id gender
 */
//-----------------------------------
function sortAsc($ary, $colum)
{
  foreach ($ary as $value) {
    $sort[] = $value[$colum];
  }
  array_multisort($sort, SORT_ASC, $ary);
  var_dump($ary);
}


//-----------------------------------
//-------------結果を配列に-----------
//-----------------------------------
/**
 * sqlの結果を配列へ
 * [関数名]:配列
 * 第1引数 sql結果の変数
 */
//-----------------------------------
function arrayResult($result)
{
  $row = 1;
  if ($result != false) {
    while (is_null($row) == false) {
      $row = mysqli_fetch_assoc($result);
      if (is_null($row) == false) {
        $ary[] = $row;
      }
    }
  }
  $cou = count($ary);
  return array($cou, $ary);
}


//-----------------------------------
//-------------select文--------------
//-----------------------------------
/**
 * select文のカラム名・テーブル名指定
 * [関数名]:sqlSelect
 * 第1引数 $link
 * 第2引数 セレクトのカラム名が入った配列
 * 第3引数 table名
 */
//-----------------------------------
function sqlSelect($link, $select, $table)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT $select FROM $table ");
  return $result;
}

//-----------------------------------
//--------id連番取り出し--------------
//-----------------------------------
/**
 * select文のカラム名・テーブル名指定
 * [関数名]:sqlSelect
 * 第1引数 $link
 */
//-----------------------------------
function userId($link)
{
  $result = mysqli_query($link, "SELECT hash_id + 1 FROM hash ORDER BY hash_id DESC LIMIT 1; ");
  return $result;
}

//-----------------------------------
//-------userテーブルセレクト---------
//-----------------------------------

//-----------------------------------
function sqlSelectid($link, $select, $table)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT $select FROM $table WHERE user_id = 1");
  return $result;
}

//-----------------------------------
//------select文(ユーザーid指定)------
//-----------------------------------

//-----------------------------------
function userSelect($link, $select, $table, $where)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT $select FROM $table WHERE user_id $where");
  return $result;
}


//-----------------------------------
//------select文(販売コード指定)------
//-----------------------------------

function saleSelect($link, $select, $table, $where)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT sales_user_id,sales_code,sales_amount,sales_time as '始まりの時間',DATE_ADD(sales_time,INTERVAL '30:00' MINUTE_SECOND) as '30分後の時間' FROM sales_code WHERE sales_code $where");
  return $result;
}

//-----------------------------------
//------select文(ユーザーid指定)------
//-----------------------------------

//-----------------------------------
function saleIdSelect($link, $select, $table, $where)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT $select FROM $table WHERE sales_user_id $where");
  return $result;
}

//-----------------------------------

//-----------------------------------
//------select文(purchase)------
//-----------------------------------

function purchaseSelect($link, $select, $table, $where)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT $select FROM purchase WHERE sales_code $where");
  return $result;
}
//-----------------------------------

//-----------------------------------
//-------------select文--------------
//-----------------------------------

//-----------------------------------
function cateSelect($link, $select, $table, $where)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT $select FROM $table WHERE category_id $where");
  return $result;
}

//-----------------------------------
//-------------select文--------------
//-----------------------------------
//カテゴリ取り出し
//-----------------------------------
function sqlCategoryid($link, $select, $table, $where)
{
  $select = implode(",", $select); //配列を,区切りで一文にする
  $result = mysqli_query($link, "SELECT $select FROM $table WHERE category_id = '$where' ");
  return $result;
}

//-----------------------------------
//-------------全件取得--------------
//-----------------------------------
/**
 * [関数名]:sqlList
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 */
//-----------------------------------
function sqlList($select, $table)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = sqlSelect($link, $select, $table);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//--------IDの連番を取得--------------
//-----------------------------------
/**
 * [関数名]:sqlList
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 */
//-----------------------------------
function hashId()
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = userId($link);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//-----user userid指定して取得--------
//-----------------------------------
/**
 * [関数名]:sqlfollow
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 */
//-----------------------------------
function sqlfollow($select, $table)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = sqlSelectid($link, $select, $table);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//-----user userid指定して取得--------
//-----------------------------------
/**
 * [関数名]:sqlUser
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 * 第3引数 判定内容 例)$id = 12 $name = 'abc'
 */
//-----------------------------------
function sqlUser($select, $table, $where)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = userSelect($link, $select, $table, $where);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//-------販売コード指定して取得--------
//-----------------------------------
/**
 * [関数名]:saleUser
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 * 第3引数 判定内容 例)$id = 12 $name = 'abc'
 */
//-----------------------------------
function saleUser($select, $table, $where)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = saleSelect($link, $select, $table, $where);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//----------id指定で販売取得----------
//-----------------------------------
/**
 * [関数名]:saleUser
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 * 第3引数 判定内容 例)$id = 12 $name = 'abc'
 */
//-----------------------------------
function saleId($select, $table, $where)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = saleIdSelect($link, $select, $table, $where);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//-------決済完了時間取得--------
//-----------------------------------
/**
 * [関数名]:purchaseUser
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 * 第3引数 判定内容 例)$id = 12 $name = 'abc'
 */
//-----------------------------------
function purchaseUser($select, $table, $where)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = purchaseSelect($link, $select, $table, $where);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//-----カテゴリid指定して取得----------
//-----------------------------------
/**
 * [関数名]:sqlCate
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 * 第3引数 判定内容 例)$id = 12 $name = 'abc'
 */
//-----------------------------------
function sqlCate($select, $table, $where)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = cateSelect($link, $select, $table, $where);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}

//-----------------------------------
//-----カテゴリid指定して取得----------
//-----------------------------------
/**
 * [関数名]:sqlCategory
 * 第1引数 取り出すカラム名配列
 * 第2引数 テーブル名
 * 第3引数 判定内容 例)$id = 12 $name = 'abc'
 */
//-----------------------------------
//ダメな方
//カテゴリ取り出し
function sqlCategory($select, $table, $where)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = sqlCategoryid($link, $select, $table, $where);
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($cou, $ary);
}
//-----------------------------------
//-----updateidを更新(使わない)--------
//-----------------------------------
/**
 * idで取り出し選択
 * [関数名]:sqlId
 * 第1引数: tableのid
 */
//-----------------------------------
function sqlId($updateid)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = mysqli_query($link, "SELECT  id , name , age FROM staff WHERE deledata is null && id = $updateid");
  sqlResulterr($link, $result); //result例外処理
  list($cou, $ary) = arrayResult($result); //配列の要素count 結果を配列に
  mysqli_close($link);
  return array($ary);
}

//-----------------------------------
//-----user userid指定して取得--------
//-----------------------------------
/**
 * sql更新
 * [関数名]:sqlUpdate
 * 第1引数 更新するid
 * 第2引数 更新する名前
 * 第3引数 更新する名前
 */
//-----------------------------------
function sqlUpdate($updateid, $name, $age)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = mysqli_query($link, "UPDATE staff SET name ='$name' , age = '$age' WHERE id=" . "$updateid");
  sqlResulterr($link, $result); //result例外処理
}

//-----------------------------------
//--update文(where カラム以外指定)----
//-----------------------------------
/**
 * sql更新
 * [関数名]:userUpdate
 * 第1引数 更新するid
 * 第2引数 更新する名前
 * 第3引数 更新する名前
 */

function userUpdate($table, $select, $id)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $result = mysqli_query($link, "UPDATE $table SET $select WHERE user_id = $id");
  sqlResulterr($link, $result); //result例外処理
  mysqli_close($link);
}



/**
 * [関数名]:randStr
 * 第1引数:生成したい文字数
 */

function randStr($length)
{
  $res = null;
  $string_length = $length;
  $base_string = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
  for ($i = 0; $i < $string_length; $i++) {
    $res .= $base_string[mt_rand(0, count($base_string) - 1)];
  }
  return $res;
}

/**
 * [関数名]:randNum
 * 第1引数:rand関数の開始数
 * 第2引数:rand関数の終了数
 */
function randNum($start, $end)
{
  return $cnt = rand($start, $end);
}

/**
 * [関数名]:changeHash
 * 第1引数:パスワード
 * 第2引数:randStr関数(自動文字生成)
 * 第3引数:randNum関数(自動数字生成)
 * 第4引数:solt文字数
 * 第5引数:ハッシュstart回数
 * 第6引数:ハッシュend回数
 */
function callChengeHash($pass, $fn, $fn2, $length, $start, $end)
{
  $solt = $fn($length); //randStr呼び出し
  $cnt = $fn2($start, $end); //randNum呼び出し
  for ($i = 1; $i <= $cnt; $i++) {
    $pass = $solt . $pass; //パスワードに特定の文字連結
    $pass = md5($pass);
  }
  $ary[] = [$solt, $cnt, $pass];
  return $ary;
}

//呼び出しはこいつだけ。
// $hashcomp=callChengeHash("hal","randStr","randNum",5,100,1000);


// echo '<pre>';
// var_dump($hashcomp);
// echo '</pre>';

//-----------------------------------

//-----------------------------------
//------------innsert文--------------
//-----------------------------------
/**
 * 新規登録　名前、フリガナを入れる
 * [関数名]:sqlInsert
 * 第1引数 テーブル名
 * 第2引数 カラム配列
 * 第3引数~ value
 */

function sqlInsert($table, $prepare, $val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10, $val11, $val12, $val13)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $prepare = implode(",", $prepare);
  // 登録するデータ

  $stmt = $link->prepare("INSERT INTO $table (
	$prepare
) VALUES (
	?,?,?,?,?,?,?,?,?,?,?,?,?
)");
  $stmt->bind_param('sssssssssssss', $val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10, $val11, $val12, $val13);
  $stmt->execute();

  $stmt->close();
  $link->close();
}
//-----------------------------------

//-----------------------------------
//------------hash(INSERT)--------------
//-----------------------------------
/**
 * 新規登録　名前、フリガナを入れる
 * [関数名]:hashInsert
 * 第1引数 テーブル名
 * 第2引数 カラム配列
 * 第3引数~ value
 */

function hashInsert($table, $prepare, $val1, $val2, $val3, $val4, $val5)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $prepare = implode(",", $prepare);
  // 登録するデータ

  $stmt = $link->prepare("INSERT INTO $table (
	$prepare
) VALUES (
	?,?,?,?,?
)");
  $date = date("Y-m-d H:i:s");
  $stmt->bind_param('sssss', $val1, $val2, $val3, $val4, $val5);
  $stmt->execute();

  $stmt->close();
  $link->close();
}
//-----------------------------------

//-----------------------------------
//-----user_secretへのinsert----
//-----------------------------------
/**
 * signup パスワード、メールアドレスを入れる
 * [関数名]:insertSignup
 * 第1引数 テーブル名
 * 第2引数 カラム配列
 * 第3引数~ value
 */
//-----------------------------------
function insertSignup($table, $prepare, $val1, $val2, $val3, $val4)
{
  $link = sqlInitial(); //sql接続　link例外処理
  $prepare = implode(",", $prepare);
  // 登録するデータ

  $stmt = $link->prepare("INSERT INTO $table (
	$prepare
) VALUES (
	?,?,?,?
)");

  $stmt->bind_param('ssss', $val1, $val2, $val3, $val4);
  $stmt->execute();

  $stmt->close();
  $link->close();
}

//-----------------------------------
//-----user userid指定して取得--------
//-----------------------------------
/**
 * sql 削除
 * [関数名]:sqlUDelete
 * 第1引数 削除するid
 */
//-----------------------------------
function sqlDelete($delete_id)
{
  $date = date("Ymd");
  $link = sqlInitial(); //sql接続　link例外処理
  $result = mysqli_query($link, "UPDATE staff SET deledata ='$date' WHERE id=" . "$delete_id");
  sqlResulterr($link, $result); //result例外処理
}


//---------------------------------
//------------userId---------------
//---------------------------------
// [関数名]:userId
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ selectする値
//---------------------------------

function alluserId($user_select,$user_from,$user_where)
{
  $link = sqlInitial();//接続
  $user_result = mysqli_query($link, "SELECT $user_select FROM $user_from Where $user_where");
  while($list=mysqli_fetch_array($user_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}


//---------------------------------
//---------------------------
//---------------------------------
// [関数名]:selectPost
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ selectする値
//---------------------------------

function selectPost($post_select,$post_from,$post_where)
{
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "SELECT $post_select FROM $post_from Where $post_where");
  while($list=mysqli_fetch_array($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}


function Select_C1()
{
  $sql=
    'SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
WHERE p.category_id = "C1"
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC
LIMIT 5';
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}


function Select_C11()
{
  $sql=
    'SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
WHERE p.category_id = "C11"
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC
LIMIT 5';
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}

function Select_C12()
{
  $sql=
    'SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
WHERE p.category_id = "C12"
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC
LIMIT 5';
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}


function Select_All()
{
  $sql='SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC
LIMIT 5';

  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}



function Select_C1_All()
{
  $sql=
    'SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
WHERE p.category_id = "C1"
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC
';
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}

function Select_C11_All()
{
  $sql=
    'SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
WHERE p.category_id = "C11"
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC
';
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}

function Select_C12_All()
{
  $sql=
    'SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
WHERE p.category_id = "C12"
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC
';
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}


function select_category_All($num)
{
  $sql=
    "SELECT u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id, ROUND(AVG(s.star_evaluation),1)
FROM user_evaluation ue
INNER JOIN star s ON ue.star_id = s.star_id
INNER JOIN post p ON ue.post_id = p.post_id
INNER JOIN category c ON c.category_id = p.category_id
INNER JOIN user u ON u.user_id = p.user_id
WHERE p.category_id ='".$num."'
GROUP BY u.LastName,u.FirstName,p.post_img,p.category_id,c.category_name, ue.post_id,ue.star_id,s.star_id,ue.post_id,p.post_id,c.category_id
ORDER BY s.star_id DESC, COUNT(ue.post_id) DESC";
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}



function user_id($hash_pass)
{
  $sql=
    "SELECT u.user_id,us.pass
  FROM user u
  INNER JOIN hash h ON h.secret_id = u.secret_id
  INNER JOIN user_secret us ON us.secret_id = u.secret_id
  WHERE us.pass ='".$hash_pass."'";;
  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}

function userDetail($user_id)
{
  $sql=
    "SELECT
  u.user_id,
  u.LastName,
  u.FirstName,
  u.height,
  u.age  ,
  u.gender,
  c.category_name,
  u.profile_img
  FROM user u
  INNER JOIN category c ON u.category_id = c.category_id
  INNER JOIN post p ON p.user_id = u.user_id
  INNER JOIN relation r ON r.user_id = u.user_id
  INNER JOIN user_evaluation ue ON p.post_id = ue.post_id
  WHERE p.user_id= $user_id
  GROUP BY p.user_id";

  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}



function folower($user_id)
{
  $sql=
    "SELECT
  COUNT(user_id)
  FROM  relation
  WHERE user_id = $user_id";

  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}


function star($user_id)
{
  $sql=
    "SELECT
  ROUND(AVG(star_id),1) AS star
  FROM  user_evaluation
  WHERE user_id = $user_id";

  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}

function wheightPostid($user_id)
{
  $sql=
    "SELECT weight,user_postalcode FROM user WHERE user_id = $user_id";

  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}
function cateName()
{
  $sql=
    "SELECT category_name,category_id FROM category
  ";

  $link = sqlInitial();//接続
  $post_result = mysqli_query($link, "$sql");
  while($list=mysqli_fetch_assoc($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}