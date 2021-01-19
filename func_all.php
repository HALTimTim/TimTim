<?php
require_once './const.php';

date_default_timezone_set('Asia/Tokyo'); //timezone設定
//---------------------------------
//--------------接続----------------
//---------------------------------
function dbConnect()
{
  $link = mysqli_connect(HOST,USER_ID,PASSWORD,DB_NAME);
  mysqli_set_charset($link, 'utf8');
  dbConnectErr($link);
  return $link;
}

//---------------------------------
//----------接続例外処理-------------
//---------------------------------
function dbConnectErr($link)
{
  if (!$link) {
    $err_msg = '予期せぬエラーが発生しました。しばらくたってから再度お試しください。(エラーコード：103)';
    require_once './tpl/error.php';
    exit;
  }
}

//---------------------------------
//-----------実行例外処理------------
//---------------------------------
function sqlErr($link, $result)
{
  if (!$result) { //エラー処理
    mysqli_close($link);
    $err_msg = '予期せぬエラーが発生しました。しばらくたってから再度お試しください。(エラーコード：104)';
    require_once './tpl/error.php';
    exit;
  }
}

//---------------------------------
//-------------全件取得------------
//---------------------------------
function sqlList($table)
{
  $link = dbConnect();//接続
  $result = mysqli_query($link, "SELECT * FROM $table ");
  while($list=mysqli_fetch_array($result)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$result); //実行例外処理
  mysqli_close($link);
  return $lists;
}

//---------------------------------
//------------idで1行取得-----------
//---------------------------------
// [関数名]:fetchId
// 第1引数: カラム名
// 第2引数: テーブル名
// 第3引数: 取得したいid
// return: array
//---------------------------------
function fetchId($column_name,$table_name,$id)
{
  $link = dbConnect();//接続
  $result = mysqli_query($link, "SELECT $column_name FROM $table_name Where id = $id");
  $list=mysqli_fetch_array($result);//ある分だけループで取得
  sqlErr($link,$result); //実行例外処理
  mysqli_close($link);
  dump($list);
  return $list;
}

//---------------------------------
//-------------var_dump------------
//---------------------------------
//function dump($result)
//{
//  echo '<pre>';
//  var_dump($result);
//  echo '</pre>';
//}


//---------------------------------
//------insert文テンプレート--------
//---------------------------------
// [関数名]:insert
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ inserする値
// 第4引数~ inserする値
// 第5引数~ inserする値
// 第6引数~ inserする値
//---------------------------------
function insert($table,$column_name,$val1, $val2, $val3, $val4)
{
  $link = dbConnect();
  dbConnectErr($link); //接続例外処理
  $stmt = $link->prepare("INSERT INTO $table ($column_name) VALUES (?,?,?,?,?)");
  $now_time = date("Y-m-d H:i:s");
  $stmt->bind_param('sssss', $val1, $val2, $val3, $val4, $now_time);
  $stmt->execute();

  $stmt->close();
  $link->close();
}

//---------------------------------
//--------insert文(award)----------
//---------------------------------
// [関数名]:insert
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ inserする値
// 第4引数~ inserする値
// 第5引数~ inserする値
// 第6引数~ inserする値
//---------------------------------
function awardInsert($table,$column_name,$val1, $val2)
{
  $link = dbConnect();
  dbConnectErr($link); //接続例外処理
  $stmt = $link->prepare("INSERT INTO $table ($column_name) VALUES (?,?)");
  // $now_time = date("Y-m-d H:i:s");
  $stmt->bind_param('si', $val1, $val2);//stringはs,intはi
  $stmt->execute();

  $stmt->close();
  $link->close();
}


//---------------------------------
//----------parchase取得-----------
//---------------------------------
function parchaseList($select,$table,$where,$group)
{
  $link = dbConnect();//接続
  $result = mysqli_query($link, "SELECT $select FROM $table WHERE $where GROUP BY $group");
  while($list=mysqli_fetch_array($result)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$result); //実行例外処理
  mysqli_close($link);
  return $lists;
}



//---------------------------------
//----------commentinsert----------
//---------------------------------
// [関数名]:insert
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ inserする値
// 第4引数~ inserする値
// 第5引数~ inserする値
// 第6引数~ inserする値
// 第6引数~ inserする値
//---------------------------------

function commentInsert($table,$comment_name,$val3)
{
  $link = dbConnect();
  dbConnectErr($link); //接続例外処理
  $stmt = $link->prepare("INSERT INTO $table ($comment_name) VALUES (?)");
  $stmt->bind_param('i',$val3);
  $stmt->execute();

  $stmt->close();
  $link->close();
}


//---------------------------------
//----------postinsert-------------
//---------------------------------
// [関数名]:insert
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ inserする値
// 第4引数~ inserする値
// 第5引数~ inserする値
// 第6引数~ inserする値
// 第6引数~ inserする値
//---------------------------------
function postInsert($table,$column_name,$val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8)
{
  $link = dbConnect();
  dbConnectErr($link); //接続例外処理
  $stmt = $link->prepare("INSERT INTO $table ($column_name) VALUES (?,?,?,?,?,?,?,?)");
  $stmt->bind_param('iiisssss', $val1, $val2, $val3, $val4 ,$val5 ,$val6, $val7, $val8);
  $stmt->execute();

  $stmt->close();
  $link->close();
}

//---------------------------------
//----------postSelectId-----------
//---------------------------------
// [関数名]:postSelectId
//---------------------------------

function postSelectId()
{
  $link = dbConnect();//接続
  $result = mysqli_query($link, "SELECT post_id + 1 FROM post ORDER BY post_id DESC LIMIT 1");
  while($list=mysqli_fetch_array($result)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$result); //実行例外処理
  mysqli_close($link);
  return $lists;
}

//---------------------------------
//---------commentSelectId---------
//---------------------------------
// [関数名]:commentSelectId
//---------------------------------

function commentSelectId()
{
  $link = dbConnect();//接続
  $result = mysqli_query($link, "SELECT comment_id + 1 FROM comment ORDER BY comment_id DESC LIMIT 1");
  while($list=mysqli_fetch_array($result)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$result); //実行例外処理
  mysqli_close($link);
  return $lists;
}

//---------------------------------
//------------userId---------------
//---------------------------------
// [関数名]:userId
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ selectする値
//---------------------------------

function userId($user_select,$user_from,$user_where)
{
  $link = dbConnect();//接続
  $user_result = mysqli_query($link, "SELECT $user_select FROM $user_from Where $user_where");
  while($list=mysqli_fetch_array($user_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$user_result); //実行例外処理
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
  $link = dbConnect();//接続
  $post_result = mysqli_query($link, "SELECT $post_select FROM $post_from Where $post_where");
  while($list=mysqli_fetch_array($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$post_result); //実行例外処理
  mysqli_close($link);
  return $lists;
}

//---------------------------------
//---------------------------
//---------------------------------
// [関数名]:selectPostMax
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ selectする値
//---------------------------------

function selectPostMax($post_select,$post_from)
{
  $link = dbConnect();//接続
  $post_result = mysqli_query($link, "SELECT $post_select FROM $post_from");
  while($list=mysqli_fetch_array($post_result)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$post_result); //実行例外処理
  mysqli_close($link);
  return $lists;
}

//---------------------------------
//---------フォロワー数--------------
//---------------------------------
// [関数名]:follow_Count
// 第1引数 カラム名
// 第2引数 カラム名(複数可)
// 第3引数~ selectする値
//---------------------------------
function follow_Count($post_select,$user_id)
{
  $link = dbConnect();//接続
  $post_result = mysqli_query($link, "SELECT $post_select FROM relation WHERE user_id=$user_id AND follow_deleting_date IS NULL");
  $list=mysqli_fetch_assoc($post_result);
  sqlErr($link,$post_result); //実行例外処理
  mysqli_close($link);
  return $list;
}

//---------------------------------
//------------評価計算--------------
//---------------------------------
// [関数名]:follow_Count
// 第1引数 カラム名
// 第2引数 カラム名(複数可)
// 第3引数~ selectする値
//---------------------------------
function ster_count($user_id){
  "SELECT e.post_id, ROUND(AVG(s.star_evaluation),1) FROM user_evaluation e LEFT OUTER JOIN star s ON e.star_id = s.star_id LEFT OUTER JOIN user u ON e.user_id = $user_id GROUP BY e.post_id";
}

//---------------------------------
//---------------------------
//---------------------------------
// [関数名]:selectPostchoise
// 第1引数 テーブル名
// 第2引数 カラム名(複数可)
// 第3引数~ selectする値
//---------------------------------

function selectPostchoise($post_select_choise,$post_from_choise,$post_where_choise)
{
  $link = dbConnect();//接続
  $post_result_choise = mysqli_query($link, "SELECT $post_select_choise FROM $post_from_choise Where $post_where_choise");
  while($list=mysqli_fetch_array($post_result_choise)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$post_result_choise); //実行例外処理
  mysqli_close($link);
  return $lists;
}

//---------------------------------
//---------------------------
//---------------------------------
// [関数名]:updateGiveawayFixed
// 第1引数 ユーザーid
//---------------------------------

function updateGiveawayfixed($user_id)
{
  $link = dbConnect();//接続
  $flg_update_result = mysqli_query($link, "UPDATE user SET flg = 2 Where user_id = $user_id");
  sqlErr($link,$flg_update_result); //実行例外処理
  mysqli_close($link);
  return $flg_update_result;
}

//---------------------------------
//---------------------------
//---------------------------------
// [関数名]:selectGiveaway
// 第1引数 ユーザーid
//---------------------------------

function selectGiveaway($user_id)
{
  $link = dbConnect();//接続
  $flg_select = mysqli_query($link, "SELECT flg FROM user Where user_id = $user_id");
  while($list=mysqli_fetch_array($flg_select)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$flg_select); //実行例外処理
  mysqli_close($link);
  return $lists;
}

//---------------------------------
//---------------------------------
//---------------------------------
// [関数名]:updateGiveawayFixed
// 第1引数 ユーザーid
//---------------------------------

function deleteResult($now_time,$post_choise_id)
{
  $link = dbConnect();//接続
  $post_delete = mysqli_query($link, "UPDATE post SET deltime = $now_time WHERE post_id = $post_choise_id");
  sqlErr($link,$post_delete); //実行例外処理
  mysqli_close($link);
  return $post_delete;
}


//---------------------------------
//------$usr_id_$reのところ--------
//---------------------------------
// [関数名]:rename_img
// 第1引数 ユーザーid
//---------------------------------
function rename_img($user_id){
  $link = dbConnect();//接続
  $post_delete = mysqli_query($link, "SELECT COUNT(post_img)+1 AS re_img FROM post WHERE user_id = $user_id");
  while($list=mysqli_fetch_assoc($post_delete)){//ある分だけループで取得
    $lists[]=$list;
  }
  mysqli_close($link);
  return $lists;
}

/****************edit.php******************/

//---------------------------------
//--------キャプションの変更--------
//---------------------------------
// [関数名]:updateCaption
// 第1引数 キャプション投稿
// 第2引数 ユーザーid
//---------------------------------

function updateCaption($caption,$post_id)
{
  $link = dbConnect();//接続
  echo $post_id;
  $cap_update_result = mysqli_query($link, "UPDATE post SET caption = \"$caption\" WHERE post_id = $post_id");
  sqlErr($link,$cap_update_result); //実行例外処理
  mysqli_close($link);
  return $cap_update_result;
}

//---------------------------------
//------キャプション画像の変更------
//---------------------------------
// [関数名]:updateCapimg
// 第1引数 キャプション画像
// 第2引数 ユーザーid
//---------------------------------

function updateCapimg($post_img,$post_id)
{
  $link = dbConnect();//接続
  $capimg_update_result = mysqli_query($link, "UPDATE post SET post_img = $post_img WHERE post_id = $post_id");
  sqlErr($link,$capimg_update_result); //実行例外処理
  mysqli_close($link);
  return $capimg_update_result;
}


//SELECT post_img FROM post WHERE post_id = 114;
//UPDATE post SET post_img = $post_img , posttime = $date WHERE post_img = $post_img ;

/****************edit.php******************/
/****************comment.php******************/

//---------------------------------
//-------選択された投稿の画像-------
//---------------------------------
// [関数名]:commentChoiseimg
// 第1引数 カラム名
//---------------------------------
function commentChoiseimg($post_id)
{
  $link = dbConnect();//接続
  $post_result = mysqli_query($link, "SELECT post_img FROM post WHERE post_id=$post_id");
  $list=mysqli_fetch_assoc($post_result);
  sqlErr($link,$post_result); //実行例外処理
  mysqli_close($link);
  return $list;
}

//---------------------------------
//--------コメント最終行取得--------
//---------------------------------
// [関数名]:commentEnd
// 第1引数 カラム名
//---------------------------------
function commentEnd($comment_id)
{
  $link = dbConnect();//接続
  $comend_result = mysqli_query($link, "SELECT COUNT(comment_id)+1 FROM parent_com WHERE comment_id = $comment_id");
  $list=mysqli_fetch_assoc($comend_result);
  sqlErr($link,$comend_result); //実行例外処理
  mysqli_close($link);
  return $list;
}

//---------------------------------
//-----------コメント投稿-----------
//---------------------------------
// [関数名]:commentPost
// 第1引数 カラム名
//---------------------------------

function commentPost($column_name,$val1,$val2,$val3,$val4,$val5)
{
  $link = dbConnect();
  dbConnectErr($link); //接続例外処理
  $stmt = $link->prepare("INSERT INTO parent_com ($column_name) VALUES (?,?,?,?,?)");
  $stmt->bind_param('isiss', $val1, $val2, $val3, $val4 ,$val5);
  $stmt->execute();

  $stmt->close();
  $link->close();
}

// INSERT INTO parent_com(comment_id,parent_comment_id,user_id,comment,post_time)
// VALUES (1,"1_[SELECT COUNT(comment_id)+1 FROM parent_com WHERE comment_id = 1]",コメントしたユーザーID,"コメント内容","コメントした時間");

//---------------------------------
//-選択された投稿のコメント全件取得-
//---------------------------------
// [関数名]:commentAll
// 第1引数 カラム名
//---------------------------------

function commentAll($comment_id)
{
  $link = dbConnect(); //接続
  $flg_select = mysqli_query($link, "SELECT comment FROM parent_com WHERE comment_id = $comment_id");
  while($list=mysqli_fetch_array($flg_select)){//ある分だけループで取得
    $lists[]=$list;
  }
  sqlErr($link,$flg_select); //実行例外処理
  mysqli_close($link);
  return $lists;
}

/****************comment.php******************/