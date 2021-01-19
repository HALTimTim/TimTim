<?php
require("func.php");
require("func_login.php");
$user_id=login($_SESSION['user_id']);


//人気ランキング
$all_lists=Select_All();

//カジュアル系
$k_lists=Select_C1();

//ストリート系
$s_lists=Select_C11();

//渋谷系
$c_lists=Select_C12();


if(@$_POST["C1"]){
  $k_lists_all=Select_category_All("C1");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}

if(@$_POST["C10"]){
  $s_lists_all=Select_category_All("C10");
  $_SESSION['category']=$s_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C11"]){
  $s_lists_all=Select_category_All("C11");
  $_SESSION['category']=$s_lists_all;
  header('Location:top_category.php');
  exirt();
}

if(@$_POST["C12"]){
  $c_lists_all=Select_category_All("C12");
  $_SESSION['category']=$c_lists_all;
  header('Location:top_category.php');
  exirt();
}

if(@$_POST["C14"]){
  $k_lists_all=Select_category_All("C14");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}

if(@$_POST["C15"]){
  $k_lists_all=Select_category_All("C15");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C18"]){
  $k_lists_all=Select_category_All("C18");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C20"]){
  $k_lists_all=Select_category_All("C20");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C21"]){
  $k_lists_all=Select_category_All("C21");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C23"]){
  $k_lists_all=Select_category_All("C23");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C24"]){
  $k_lists_all=Select_category_All("C24");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}

if(@$_POST["C3"]){
  $k_lists_all=Select_category_All("C3");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C6"]){
  $k_lists_all=Select_category_All("C6");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C5"]){
  $k_lists_all=Select_category_All("C5");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}
if(@$_POST["C7"]){
  $k_lists_all=Select_category_All("C7");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}

if(@$_POST["C8"]){
  $k_lists_all=Select_category_All("C8");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}

if(@$_POST["C9"]){
  $k_lists_all=Select_category_All("C9");
  $_SESSION['category']=$k_lists_all;
  header('Location:top_category.php');
  exirt();
}

require("tpl/top.php");