<?php require_once('../../Connections/c32_19aq_com.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../error.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$jintian_start=mktime(0,0,0,date('m'),date('d'),date('Y'));
$jintian_end=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
$zuotian_start=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
$zuotian_end=mktime(0,0,0,date('m'),date('d'),date('Y'))-1;
$yizhou_start=mktime(0,0,0,date('m'),date('d')-date('w')+1-7,date('Y'));
$yizhou_end=mktime(23,59,59,date('m'),date('d')-date('w')+7-7,date('Y'));
$benyue_start=mktime(0,0,0,date('m'),1,date('Y'));
$benyue_end=mktime(23,59,59,date('m'),date('t'),date('Y'));

$start_Recordset1 = "-1";
if (isset($jintian_start)) {
  $start_Recordset1 = $jintian_start;
}
$end_Recordset1 = "-1";
if (isset($jintian_end)) {
  $end_Recordset1 = $jintian_end;
}

$start_Recordset2 = "-1";
if (isset($zuotian_start)) {
  $start_Recordset2 = $zuotian_start;
}
$end_Recordset2 = "-1";
if (isset($zuotian_end)) {
  $end_Recordset2 = $zuotian_end;
}

$start_Recordset3 = "-1";
if (isset($yizhou_start)) {
  $start_Recordset3 = $yizhou_start;
}
$end_Recordset3 = "-1";
if (isset($yizhou_end)) {
  $end_Recordset3 = $yizhou_end;
}

$start_Recordset4 = "-1";
if (isset($benyue_start)) {
  $start_Recordset4 = $benyue_start;
}
$end_Recordset4 = "-1";
if (isset($benyue_end)) {
  $end_Recordset4 = $benyue_end;
}




mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_Recordset1 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010500001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$query_Recordset2 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011500001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset2 = mysql_query($query_Recordset2, $c32_19aq_com) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

$query_Recordset3 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011600001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset3 = mysql_query($query_Recordset3, $c32_19aq_com) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

$query_Recordset4 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010100001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset4 = mysql_query($query_Recordset4, $c32_19aq_com) or die(mysql_error());
$row_Recordset4 = mysql_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysql_num_rows($Recordset4);

$query_Recordset5 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011100001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset5 = mysql_query($query_Recordset5, $c32_19aq_com) or die(mysql_error());
$row_Recordset5 = mysql_fetch_assoc($Recordset5);
$totalRows_Recordset5 = mysql_num_rows($Recordset5);

$query_Recordset6 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011000001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset6 = mysql_query($query_Recordset6, $c32_19aq_com) or die(mysql_error());
$row_Recordset6 = mysql_fetch_assoc($Recordset6);
$totalRows_Recordset6 = mysql_num_rows($Recordset6);

$query_Recordset7 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010200001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset7 = mysql_query($query_Recordset7, $c32_19aq_com) or die(mysql_error());
$row_Recordset7 = mysql_fetch_assoc($Recordset7);
$totalRows_Recordset7 = mysql_num_rows($Recordset7);

$query_Recordset8 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011400001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset8 = mysql_query($query_Recordset8, $c32_19aq_com) or die(mysql_error());
$row_Recordset8 = mysql_fetch_assoc($Recordset8);
$totalRows_Recordset8 = mysql_num_rows($Recordset8);

$query_Recordset9 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011700001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset9 = mysql_query($query_Recordset9, $c32_19aq_com) or die(mysql_error());
$row_Recordset9 = mysql_fetch_assoc($Recordset9);
$totalRows_Recordset9 = mysql_num_rows($Recordset9);

$query_Recordset10 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010900001'", GetSQLValueString($start_Recordset1, "date"),GetSQLValueString($end_Recordset1, "date"));
$Recordset10 = mysql_query($query_Recordset10, $c32_19aq_com) or die(mysql_error());
$row_Recordset10 = mysql_fetch_assoc($Recordset10);
$totalRows_Recordset10 = mysql_num_rows($Recordset10);

$sum1 = $row_Recordset1['SUM(qty_ship)'] + $row_Recordset2['SUM(qty_ship)'] + $row_Recordset3['SUM(qty_ship)'] + $row_Recordset4['SUM(qty_ship)'] + $row_Recordset5['SUM(qty_ship)'] + $row_Recordset6['SUM(qty_ship)'] + $row_Recordset7['SUM(qty_ship)'] + $row_Recordset8['SUM(qty_ship)'] + $row_Recordset9['SUM(qty_ship)'] + $row_Recordset10['SUM(qty_ship)'];


$query_Recordset21 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010500001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset21 = mysql_query($query_Recordset21, $c32_19aq_com) or die(mysql_error());
$row_Recordset21 = mysql_fetch_assoc($Recordset21);
$totalRows_Recordset21 = mysql_num_rows($Recordset21);

$query_Recordset22 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011500001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset22 = mysql_query($query_Recordset22, $c32_19aq_com) or die(mysql_error());
$row_Recordset22 = mysql_fetch_assoc($Recordset22);
$totalRows_Recordset2 = mysql_num_rows($Recordset22);

$query_Recordset23 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011600001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset23 = mysql_query($query_Recordset23, $c32_19aq_com) or die(mysql_error());
$row_Recordset23 = mysql_fetch_assoc($Recordset23);
$totalRows_Recordset23 = mysql_num_rows($Recordset23);

$query_Recordset24 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010100001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset24 = mysql_query($query_Recordset24, $c32_19aq_com) or die(mysql_error());
$row_Recordset24 = mysql_fetch_assoc($Recordset24);
$totalRows_Recordset24 = mysql_num_rows($Recordset24);

$query_Recordset25 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011100001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset25 = mysql_query($query_Recordset25, $c32_19aq_com) or die(mysql_error());
$row_Recordset25 = mysql_fetch_assoc($Recordset25);
$totalRows_Recordset25 = mysql_num_rows($Recordset25);

$query_Recordset26 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011000001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset26 = mysql_query($query_Recordset26, $c32_19aq_com) or die(mysql_error());
$row_Recordset26 = mysql_fetch_assoc($Recordset26);
$totalRows_Recordset26 = mysql_num_rows($Recordset26);

$query_Recordset27 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010200001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset27 = mysql_query($query_Recordset27, $c32_19aq_com) or die(mysql_error());
$row_Recordset27 = mysql_fetch_assoc($Recordset27);
$totalRows_Recordset27 = mysql_num_rows($Recordset27);

$query_Recordset28 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011400001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset28 = mysql_query($query_Recordset28, $c32_19aq_com) or die(mysql_error());
$row_Recordset28 = mysql_fetch_assoc($Recordset28);
$totalRows_Recordset28 = mysql_num_rows($Recordset28);

$query_Recordset29 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011700001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset29 = mysql_query($query_Recordset29, $c32_19aq_com) or die(mysql_error());
$row_Recordset29 = mysql_fetch_assoc($Recordset29);
$totalRows_Recordset29 = mysql_num_rows($Recordset29);

$query_Recordset30 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010900001'", GetSQLValueString($start_Recordset2, "date"),GetSQLValueString($end_Recordset2, "date"));
$Recordset30 = mysql_query($query_Recordset30, $c32_19aq_com) or die(mysql_error());
$row_Recordset30 = mysql_fetch_assoc($Recordset30);
$totalRows_Recordset30 = mysql_num_rows($Recordset30);

$sum2 = $row_Recordset21['SUM(qty_ship)'] + $row_Recordset22['SUM(qty_ship)'] + $row_Recordset23['SUM(qty_ship)'] + $row_Recordset24['SUM(qty_ship)'] + $row_Recordset25['SUM(qty_ship)'] + $row_Recordset26['SUM(qty_ship)'] + $row_Recordset27['SUM(qty_ship)'] + $row_Recordset28['SUM(qty_ship)'] + $row_Recordset29['SUM(qty_ship)'] + $row_Recordset30['SUM(qty_ship)'];

$query_Recordset31 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010500001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset31 = mysql_query($query_Recordset31, $c32_19aq_com) or die(mysql_error());
$row_Recordset31 = mysql_fetch_assoc($Recordset31);
$totalRows_Recordset31 = mysql_num_rows($Recordset31);

$query_Recordset32 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011500001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset32 = mysql_query($query_Recordset32, $c32_19aq_com) or die(mysql_error());
$row_Recordset32 = mysql_fetch_assoc($Recordset32);
$totalRows_Recordset32 = mysql_num_rows($Recordset32);

$query_Recordset33 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011600001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset33 = mysql_query($query_Recordset33, $c32_19aq_com) or die(mysql_error());
$row_Recordset33 = mysql_fetch_assoc($Recordset33);
$totalRows_Recordset33 = mysql_num_rows($Recordset33);

$query_Recordset34 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010100001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset34 = mysql_query($query_Recordset34, $c32_19aq_com) or die(mysql_error());
$row_Recordset34 = mysql_fetch_assoc($Recordset34);
$totalRows_Recordset34 = mysql_num_rows($Recordset34);

$query_Recordset35 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011100001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset35 = mysql_query($query_Recordset35, $c32_19aq_com) or die(mysql_error());
$row_Recordset35 = mysql_fetch_assoc($Recordset35);
$totalRows_Recordset35 = mysql_num_rows($Recordset35);

$query_Recordset36 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011000001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset36 = mysql_query($query_Recordset36, $c32_19aq_com) or die(mysql_error());
$row_Recordset36 = mysql_fetch_assoc($Recordset36);
$totalRows_Recordset36 = mysql_num_rows($Recordset36);

$query_Recordset37 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010200001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset37 = mysql_query($query_Recordset37, $c32_19aq_com) or die(mysql_error());
$row_Recordset37 = mysql_fetch_assoc($Recordset37);
$totalRows_Recordset37 = mysql_num_rows($Recordset37);

$query_Recordset38 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011400001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset38 = mysql_query($query_Recordset38, $c32_19aq_com) or die(mysql_error());
$row_Recordset38 = mysql_fetch_assoc($Recordset38);
$totalRows_Recordset38 = mysql_num_rows($Recordset38);

$query_Recordset39 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011700001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset39 = mysql_query($query_Recordset39, $c32_19aq_com) or die(mysql_error());
$row_Recordset39 = mysql_fetch_assoc($Recordset39);
$totalRows_Recordset39 = mysql_num_rows($Recordset39);

$query_Recordset40 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010900001'", GetSQLValueString($start_Recordset3, "date"),GetSQLValueString($end_Recordset3, "date"));
$Recordset40 = mysql_query($query_Recordset40, $c32_19aq_com) or die(mysql_error());
$row_Recordset40 = mysql_fetch_assoc($Recordset40);
$totalRows_Recordset40 = mysql_num_rows($Recordset40);

$sum3 = $row_Recordset31['SUM(qty_ship)'] + $row_Recordset32['SUM(qty_ship)'] + $row_Recordset33['SUM(qty_ship)'] + $row_Recordset34['SUM(qty_ship)'] + $row_Recordset35['SUM(qty_ship)'] + $row_Recordset36['SUM(qty_ship)'] + $row_Recordset37['SUM(qty_ship)'] + $row_Recordset38['SUM(qty_ship)'] + $row_Recordset39['SUM(qty_ship)'] + $row_Recordset40['SUM(qty_ship)'];

$query_Recordset41 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010500001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset41 = mysql_query($query_Recordset41, $c32_19aq_com) or die(mysql_error());
$row_Recordset41 = mysql_fetch_assoc($Recordset41);
$totalRows_Recordset41 = mysql_num_rows($Recordset41);

$query_Recordset42 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011500001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset42 = mysql_query($query_Recordset42, $c32_19aq_com) or die(mysql_error());
$row_Recordset42 = mysql_fetch_assoc($Recordset42);
$totalRows_Recordset42 = mysql_num_rows($Recordset42);

$query_Recordset43 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011600001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset43 = mysql_query($query_Recordset43, $c32_19aq_com) or die(mysql_error());
$row_Recordset43 = mysql_fetch_assoc($Recordset43);
$totalRows_Recordset43 = mysql_num_rows($Recordset43);

$query_Recordset44 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010100001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset44 = mysql_query($query_Recordset44, $c32_19aq_com) or die(mysql_error());
$row_Recordset44 = mysql_fetch_assoc($Recordset44);
$totalRows_Recordset44 = mysql_num_rows($Recordset44);

$query_Recordset45 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011100001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset45 = mysql_query($query_Recordset45, $c32_19aq_com) or die(mysql_error());
$row_Recordset45 = mysql_fetch_assoc($Recordset45);
$totalRows_Recordset45 = mysql_num_rows($Recordset45);

$query_Recordset46 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011000001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset46 = mysql_query($query_Recordset46, $c32_19aq_com) or die(mysql_error());
$row_Recordset46 = mysql_fetch_assoc($Recordset46);
$totalRows_Recordset46 = mysql_num_rows($Recordset46);

$query_Recordset47 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010200001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset47 = mysql_query($query_Recordset47, $c32_19aq_com) or die(mysql_error());
$row_Recordset47 = mysql_fetch_assoc($Recordset47);
$totalRows_Recordset47 = mysql_num_rows($Recordset47);

$query_Recordset48 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011400001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset48 = mysql_query($query_Recordset48, $c32_19aq_com) or die(mysql_error());
$row_Recordset48 = mysql_fetch_assoc($Recordset48);
$totalRows_Recordset48 = mysql_num_rows($Recordset48);

$query_Recordset49 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2011700001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset49 = mysql_query($query_Recordset49, $c32_19aq_com) or die(mysql_error());
$row_Recordset49 = mysql_fetch_assoc($Recordset49);
$totalRows_Recordset49 = mysql_num_rows($Recordset49);

$query_Recordset50 = sprintf("SELECT SUM(qty_ship) FROM sois WHERE date_shipped > from_unixtime(%s) AND date_shipped < from_unixtime(%s) AND pn = '2010900001'", GetSQLValueString($start_Recordset4, "date"),GetSQLValueString($end_Recordset4, "date"));
$Recordset50 = mysql_query($query_Recordset50, $c32_19aq_com) or die(mysql_error());
$row_Recordset50 = mysql_fetch_assoc($Recordset50);
$totalRows_Recordset50 = mysql_num_rows($Recordset50);

$sum4 = $row_Recordset41['SUM(qty_ship)'] + $row_Recordset42['SUM(qty_ship)'] + $row_Recordset43['SUM(qty_ship)'] + $row_Recordset44['SUM(qty_ship)'] + $row_Recordset45['SUM(qty_ship)'] + $row_Recordset46['SUM(qty_ship)'] + $row_Recordset47['SUM(qty_ship)'] + $row_Recordset48['SUM(qty_ship)'] + $row_Recordset49['SUM(qty_ship)'] + $row_Recordset50['SUM(qty_ship)'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发货数据汇总</title>
</head>

<body>
<h1>发货数据汇总</h1>
当前时间：<?PHP echo $showtime=date("Y-m-d H:i:s");?>




<!--
<?PHP echo $time;?>
-->



<table width="330px" border="2" cellpadding="0" cellspacing="0">
  <tr>
    <th width="93" scope="col">料号</th>
    <th width="59" scope="col">型号</th>
    <th width="45" scope="col">昨天</th>
    <th width="35" scope="col">今天</th>
    <th width="40" scope="col">一周</th>
    <th width="42" scope="col">本月</th>
  </tr>
  <tr>
    <td>2010500001</td>
    <td>P2350</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset21['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset1['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset31['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset41['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011500001</td>
    <td>P3350</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset22['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset2['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset32['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset42['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011600001</td>
    <td>D3370</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset23['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset3['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset33['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset43['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2010100001</td>
    <td>P6350</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset24['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset4['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset34['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset44['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011100001</td>
    <td>D6370</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset25['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset5['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset35['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset45['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011000001</td>
    <td>P7350</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset26['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset6['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset36['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset46['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2010200001</td>
    <td>P8350</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset27['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset7['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset37['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset47['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011400001</td>
    <td>D8370</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset28['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset8['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset38['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset48['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011700001</td>
    <td>H6290</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset29['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset9['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset39['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset49['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2010100001</td>
    <td>H6390</td>
    <td bgcolor=#2894FF><?php echo $row_Recordset30['SUM(qty_ship)']; ?></td>
    <td bgcolor=#28FF28><?php echo $row_Recordset10['SUM(qty_ship)']; ?></td>
    <td bgcolor=#FF0000><?php echo $row_Recordset40['SUM(qty_ship)']; ?></td>
    <td bgcolor=#00FFFF><?php echo $row_Recordset50['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><b>总数：</b></td>
    <td><?php echo $sum2; ?>台</td>
    <td><?php echo $sum1; ?>台</td>
    <td><?php echo $sum3; ?>台</td>
    <td><?php echo $sum4; ?>台</td>
  </tr>
</table>
<p>本周数据为昨天起 前7天数据 </p>
<p>空白为无发货数据</p>
<p>此数据含返修机发货数据，不含借样机发货数据</p>

<?php
$time=date("Y-m-d H-i-s");
?>


</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
