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
$query_Recordset1 = "SELECT ar.ar,ab.name,ar.id,sum(ar.ar_total),sum(ar.due),ar.so,ar.ar_total,ar.due FROM ar LEFT JOIN ab ON ar.id=ab.id WHERE `status`='open' GROUP BY ar.id";
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<!--
ar_total  未付总额
due       余额
-->


<table width="660" border="2" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="6" scope="col">客户欠款实时状态</th>
  </tr>
  <tr>
    <th bgcolor=#ADADAD colspan="2" scope="col">客户</th>
    <th bgcolor=#ADADAD colspan="3" scope="col">应收信息</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col">客户编号</th>
    <th scope="col">客户名</th>
    <th scope="col">未付总额</th>
    <th scope="col">已付总额</th>
    <th scope="col">余额</th>
    <th scope="col">详细</th>
  </tr>
      <!--<td><?php echo $row_Recordset1['ar']; ?></td>-->
      <!--<td><?php echo $row_Recordset1['so']; ?></td>-->
  <?php do { 
   $sum =  $sum + $row_Recordset1['sum(ar.ar_total)'];
   $sum1 =  $sum1 + $row_Recordset1['sum(ar.due)'];
  ?>
    <tr>
      <td><?php echo $row_Recordset1['id']; ?></td>
      <td><?php echo $row_Recordset1['name']; ?></td>
      <td><?php echo $row_Recordset1['sum(ar.ar_total)']; ?></td>
      <td>0000.0000</td>
      <td><?php echo $row_Recordset1['sum(ar.due)']; ?></td>
      <td><a href="reconciliation_list.php?id=<?php echo $row_Recordset1['id']; ?>">查看</a></td>

    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
     <tr>
      <td>&nbsp;</td>
      <td align="right"><b>合计：</b></td>
      <td bgcolor=#28FF28><?php echo $sum; ?></td>
      <td>&nbsp;</td>
      <td bgcolor=#28FF28><?php echo $sum1; ?></td>
      <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
