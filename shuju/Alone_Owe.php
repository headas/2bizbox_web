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

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p2350 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2010500001'";
$p2350 = mysql_query($query_p2350, $c32_19aq_com) or die(mysql_error());
$row_p2350 = mysql_fetch_assoc($p2350);
$totalRows_p2350 = mysql_num_rows($p2350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p3350 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2011500001'";
$p3350 = mysql_query($query_p3350, $c32_19aq_com) or die(mysql_error());
$row_p3350 = mysql_fetch_assoc($p3350);
$totalRows_p3350 = mysql_num_rows($p3350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_d3370 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2011600001'";
$d3370 = mysql_query($query_d3370, $c32_19aq_com) or die(mysql_error());
$row_d3370 = mysql_fetch_assoc($d3370);
$totalRows_d3370 = mysql_num_rows($d3370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p6350 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2010100001'";
$p6350 = mysql_query($query_p6350, $c32_19aq_com) or die(mysql_error());
$row_p6350 = mysql_fetch_assoc($p6350);
$totalRows_p6350 = mysql_num_rows($p6350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_d6370 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2011100001'";
$d6370 = mysql_query($query_d6370, $c32_19aq_com) or die(mysql_error());
$row_d6370 = mysql_fetch_assoc($d6370);
$totalRows_d6370 = mysql_num_rows($d6370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p7350 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2011000001'";
$p7350 = mysql_query($query_p7350, $c32_19aq_com) or die(mysql_error());
$row_p7350 = mysql_fetch_assoc($p7350);
$totalRows_p7350 = mysql_num_rows($p7350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p8350 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2010200001'";
$p8350 = mysql_query($query_p8350, $c32_19aq_com) or die(mysql_error());
$row_p8350 = mysql_fetch_assoc($p8350);
$totalRows_p8350 = mysql_num_rows($p8350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_d8370 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2011400001'";
$d8370 = mysql_query($query_d8370, $c32_19aq_com) or die(mysql_error());
$row_d8370 = mysql_fetch_assoc($d8370);
$totalRows_d8370 = mysql_num_rows($d8370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_h6290 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2011700001'";
$h6290 = mysql_query($query_h6290, $c32_19aq_com) or die(mysql_error());
$row_h6290 = mysql_fetch_assoc($h6290);
$totalRows_h6290 = mysql_num_rows($h6290);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_h6390 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2010100001'";
$h6390 = mysql_query($query_h6390, $c32_19aq_com) or die(mysql_error());
$row_h6390 = mysql_fetch_assoc($h6390);
$totalRows_h6390 = mysql_num_rows($h6390);

$query_p2350 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2010500001'";
$p2350 = mysql_query($query_p2350, $c32_19aq_com) or die(mysql_error());
$row_p2350 = mysql_fetch_assoc($p2350);
$totalRows_p2350 = mysql_num_rows($p2350);

$query_Recordset1 = "SELECT SUM(qty),SUM(ship) FROM soi WHERE status='OPEN' AND pn='2010500001'";
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$query_Recordset1 = "SELECT so,qty,ship,description,pn,status FROM soi WHERE status='OPEN' AND pn='2010500001'";
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$sum = $row_p2350['SUM(qty)']+$row_p3350['SUM(qty)']+$row_d3370['SUM(qty)']+$row_p6350['SUM(qty)']+$row_d6370['SUM(qty)']+$row_p7350['SUM(qty)']+$row_p8350['SUM(qty)']+$row_d8370['SUM(qty)']+$row_h6290['SUM(qty)']+$row_h6390['SUM(qty)'];

$sum1 = $row_p2350['SUM(ship)']+$row_p3350['SUM(ship)']+$row_d3370['SUM(ship)']+$row_p6350['SUM(ship)']+$row_d6370['SUM(ship)']+$row_p7350['SUM(ship)']+$row_p8350['SUM(ship)']+$row_d8370['SUM(ship)']+$row_h6290['SUM(ship)']+$row_h6390['SUM(ship)'];

$p2350 = $row_p2350['SUM(qty)'] - $row_p2350['SUM(ship)'];
$p3350 =  $row_p3350['SUM(qty)'] - $row_p3350['SUM(ship)'];
$d3370 =  $row_d3370['SUM(qty)'] - $row_d3370['SUM(ship)'];
$p6350 =  $row_p6350['SUM(qty)'] - $row_p6350['SUM(ship)'];
$d6370 =  $row_d6370['SUM(qty)'] - $row_d6370['SUM(ship)'];
$p7350 =  $row_p7350['SUM(qty)'] - $row_p7350['SUM(ship)'];
$p8350 =  $row_p8350['SUM(qty)'] - $row_p8350['SUM(ship)'];
$d8370 =  $row_d8370['SUM(qty)'] - $row_d8370['SUM(ship)'];
$h6290 =  $row_h6290['SUM(qty)'] - $row_h6290['SUM(ship)'];
$h6390 =  $row_h6390['SUM(qty)'] - $row_h6390['SUM(ship)'];
$sum2 = $p2350+$p3350+$d3370+$p6350+$d6370+$p7350+$p8350+$d8370+$h6290+$h6390;


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<table width="330px" border="2" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="5" scope="col">所有成品欠货订单明细</th>
  </tr>
  <tr>
    <td>型号</td>
    <td>订单数</td>
    <td>已发数</td>
    <td>欠数</td>
    <td>详细</td>
  </tr>
    <tr>
      <td>P2350</td>
      <td><?php echo $row_p2350['SUM(qty)']; ?></td>
      <td><?php echo $row_p2350['SUM(ship)']; ?></td>
      <td><?php echo $p2350;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>P3350</td>
      <td><?php echo $row_p3350['SUM(qty)']; ?></td>
      <td><?php echo $row_p3350['SUM(ship)']; ?></td>
      <td><?php echo $p3350;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>D3370</td>
      <td><?php echo $row_d3370['SUM(qty)']; ?></td>
      <td><?php echo $row_d3370['SUM(ship)']; ?></td>
      <td><?php echo $d3370;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>P6350</td>
      <td><?php echo $row_p6350['SUM(qty)']; ?></td>
      <td><?php echo $row_p6350['SUM(ship)']; ?></td>
      <td><?php echo $p6350;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>D6370</td>
      <td><?php echo $row_d6370['SUM(qty)']; ?></td>
      <td><?php echo $row_d6370['SUM(ship)']; ?></td>
      <td><?php echo $d6370;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>P7350</td>
      <td><?php echo $row_p7350['SUM(qty)']; ?></td>
      <td><?php echo $row_p7350['SUM(ship)']; ?></td>
      <td><?php echo $p7350;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>P8350</td>
      <td><?php echo $row_p8350['SUM(qty)']; ?></td>
      <td><?php echo $row_p8350['SUM(ship)']; ?></td>
      <td><?php echo $p8350;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>D8370</td>
      <td><?php echo $row_d8370['SUM(qty)']; ?></td>
      <td><?php echo $row_d8370['SUM(ship)']; ?></td>
      <td><?php echo $d8370;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>H6290</td>
      <td><?php echo $row_h6290['SUM(qty)']; ?></td>
      <td><?php echo $row_h6290['SUM(ship)']; ?></td>
      <td><?php echo $h6290;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>H6390</td>
      <td><?php echo $row_h6390['SUM(qty)']; ?></td>
      <td><?php echo $row_h6390['SUM(ship)']; ?></td>
      <td><?php echo $h6390;?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>总数</td>
      <td><?php echo $sum; ?></td>
      <td><?php echo $sum1; ?></td>
      <td><?php echo $sum2; ?></td>
      <td>&nbsp;</td>
    </tr>
</table>
当前时间：<?PHP echo $showtime=date("Y-m-d H:i:s");?>

</body>
</html>
<?php
mysql_free_result($p2350);

mysql_free_result($p3350);

mysql_free_result($d3370);

mysql_free_result($p6350);

mysql_free_result($d6370);

mysql_free_result($p7350);

mysql_free_result($p8350);

mysql_free_result($d8370);

mysql_free_result($h6290);

mysql_free_result($h6390);
?>
