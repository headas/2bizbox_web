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
$benyue_start=mktime(0,0,0,date('m'),1,date('Y'));
$benyue_end=mktime(23,59,59,date('m'),date('t'),date('Y'));

$a1 = $_POST["start"].' '.'000000';
$a2 = $_POST["end"].' '.'235959';
$a3 = strtotime($a1);
$a4 = strtotime($a2);


$start_Recordset1 = "-1";
if (isset($_POST['start'])) {
  $start_Recordset1 = $a3;
}
$end_Recordset1 = "-1";
if (isset($_POST['end'])) {
  $end_Recordset1 = $a4;
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

$sum = $row_Recordset1['SUM(qty_ship)'] + $row_Recordset2['SUM(qty_ship)'] + $row_Recordset3['SUM(qty_ship)'] + $row_Recordset4['SUM(qty_ship)'] + $row_Recordset5['SUM(qty_ship)'] + $row_Recordset6['SUM(qty_ship)'] + $row_Recordset7['SUM(qty_ship)'] + $row_Recordset8['SUM(qty_ship)'] + $row_Recordset9['SUM(qty_ship)'] + $row_Recordset10['SUM(qty_ship)'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发货数据汇总</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="./delivery.php">
  <label for="start"></label>
  <input type="text" name="start" id="start" value="<?php echo date('Y-m-d',$benyue_start); ?>"/>
  <label for="end"></label>
  <input type="text" name="end" id="end" value="<?php echo date('Y-m-d',$benyue_end); ?>"/>
  <input type="submit" name="tijiao" id="tijiao" value="查询" />
</form>

<!--
<?php echo $a3; ?> 1111
</br>
<?php echo $a4; ?> 22222

<?php echo $_POST["start"]; ?> <?php echo $_POST["end"]; ?> 
 -->
</br>
<table width="330px" border="2" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="3"><?php echo $_POST["start"]; ?>至<?php echo $_POST["end"]; ?> 发货数据汇总</th>
  </tr>
  <tr>
    <th bgcolor=#ADADAD>料号</th>
    <th bgcolor=#ADADAD>型号</th>
    <th bgcolor=#ADADAD>台数</th>
  </tr>
  <tr>
    <td>2010500001</td>
    <td>P2350</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset1['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011500001</td>
    <td>P3350</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset2['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011600001</td>
    <td>D3370</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset3['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2010100001</td>
    <td>P6350</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset4['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011100001</td>
    <td>D6370</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset5['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011000001</td>
    <td>P7350</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset6['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2010200001</td>
    <td>P8350</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset7['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011400001</td>
    <td>D8370</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset8['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2011700001</td>
    <td>H6290</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset9['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>2010100001</td>
    <td>H6390</td>
    <td bgcolor=#28FF28><?php echo $row_Recordset10['SUM(qty_ship)']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><b>总数：</b></td>
    <td bgcolor=#28FF28><?php echo $sum; ?> 台</td>
  </tr>
</table>




</body>
</html>
<?php
mysql_free_result($Recordset1);
mysql_free_result($Recordset2);
mysql_free_result($Recordset3);
mysql_free_result($Recordset4);
mysql_free_result($Recordset5);
mysql_free_result($Recordset6);
mysql_free_result($Recordset7);
mysql_free_result($Recordset8);
mysql_free_result($Recordset9);
mysql_free_result($Recordset10);
?>
