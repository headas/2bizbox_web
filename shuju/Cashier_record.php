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

$maxRows_Recordset1 = 200;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_Recordset1 = "SELECT so.so,so.ar_total,so.id,ab.name,so.status,ar.ar,ar.ar_sub,ar.paid,ar.due,ar.status FROM so left join ab on so.id=ab.id left join ar on so.so=ar.so WHERE so.status='OPEN'  OR so.status='CLOSED' ORDER BY so DESC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>收款记录实时状态表</title>
</head>

<body>
<table width="780"  border="1" cellpadding="1" cellspacing="0">
  <tr>
    <td colspan="10" align="center"><b>收款记录实时状态表</b></td>
  </tr>
  <tr>
  	<td>销售单号</td>
    <td>销售金额</td>
    <td>客户编号</td>
    <td>客户名称</td>
    <td>是否结单</td>
    <td>应收发票号</td>
    <td>应收金额</td>
    <td>已收金额</td>
    <td>未收金额</td>
    <td>发票状态</td>
  </tr>
  <tr>
    <?php do {
	if($row_Recordset1['status']== 'CLOSED'){
		$bgcolor="#28FF28";
		}elseif($row_Recordset1['status']== 'OPEN'){
		$bgcolor="#FF0000";
		}else{
		$bgcolor="#FFFFFF";
			}
		//echo $query_Recordset1;
		
		 ?>
      <td><?php echo $row_Recordset1['so']; ?></td>
      <td><?php echo $row_Recordset1['ar_total']; ?></td>
      <td>&nbsp;</td>
      <td><?php echo $row_Recordset1['name']; ?></td>
      <td bgcolor=<?php echo $bgcolor; ?>><?php echo $row_Recordset1['status']; ?></td>
      <td><?php echo $row_Recordset1['ar']; ?></td>
      <td><?php echo $row_Recordset1['ar_sub']; ?></td>
      <td><?php echo $row_Recordset1['paid']; ?></td>
      <td><?php echo $row_Recordset1['due']; ?></td>
      <td bgcolor=<?php echo $bgcolor; ?>><?php echo $row_Recordset1['status']; ?></td>
   </tr>
<?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
