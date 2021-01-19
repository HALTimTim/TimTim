<?php
require("func_login.php");
$user_id=login($_SESSION['user_id']);
require_once "func_all.php";
$user_id = 2;

//---------------------------------
//-----------select内容------------
//---------------------------------
$select = "DATE_FORMAT(p.`settlement_complete_time`, '%2020-%m') as `月別`,SUM(p.purchase_price) AS '合計金額'";
$from = "purchase p INNER JOIN sales_code s ON p.sales_code = s.sales_code";
$where = "s.sales_user_id = $user_id AND s.sales_code LIKE '$user_id%'";
$group = "s.sales_user_id , p.settlement_complete_time";
$result = parchaseList($select, $from, $where, $group);

//---------------------------------
//---------初期値に0を代入----------
//---------------------------------

$january = $february = $march = $april = $may = $june = $july = $augst = $september = $october = $november = $december = 0;

//---------------------------------
//----該当月に合計決済金額を代入----
//---------------------------------

foreach ($result as $value) :
  if ("2020-01" == $value[0]) :
    $january =  $value[1];
  elseif ("2020-02" == $value[0]) :
    $february =  $value[1];
  elseif ("2020-03" == $value[0]) :
    $march =  $value[1];
  elseif ("2020-04" == $value[0]) :
    $april =  $value[1];
  elseif ("2020-05" == $value[0]) :
    $may =  $value[1];
  elseif ("2020-06" == $value[0]) :
    $june =  $value[1];
  elseif ("2020-07" == $value[0]) :
    $july =  $value[1];
  elseif ("2020-08" == $value[0]) :
    $augst =  $value[1];
  elseif ("2020-09" == $value[0]) :
    $september =  $value[1];
  elseif ("2020-10" == $value[0]) :
    $october =  $value[1];
  elseif ("2020-11" == $value[0]) :
    $november =  $value[1];
  elseif ("2020-12" == $value[0]) :
    $december =  $value[1];
  endif;
endforeach;

//---------------------------------
//-------該当年合計金額を計算-------
//---------------------------------

$year_price = $january + $february + $march + $april + $may + $june + $july + $augst + $september + $october + $november + $december;

// SELECT DATE_FORMAT(p.`settlement_complete_time`, '%2020-%m') as `月別`
// ,SUM(p.purchase_price) AS '合計金額'
// FROM purchase p
// INNER JOIN sales_code s
// ON p.sales_code = s.sales_code
// WHERE s.sales_user_id = 1
// AND s.sales_code LIKE '1%'
// GROUP BY s.sales_user_id
// ,p.settlement_complete_time;
require_once "./tpl/salesconfirmation.php";